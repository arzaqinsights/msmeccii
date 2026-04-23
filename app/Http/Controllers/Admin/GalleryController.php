<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        // Get unique categories along with their counts and latest image for cover
        $categories = Gallery::selectRaw('category, count(*) as image_count, max(id) as latest_id')
            ->groupBy('category')
            ->get();
            
        // Map cover images
        foreach ($categories as $cat) {
            $cat->cover = Gallery::find($cat->latest_id)->image_path;
        }

        // Apply Custom Ordering from Site Settings
        $site = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        $savedOrder = isset($site['gallery_category_order']) ? json_decode($site['gallery_category_order'], true) : [];
        
        if (!empty($savedOrder)) {
            $categories = $categories->sortBy(function($cat) use ($savedOrder) {
                $pos = array_search($cat->category, $savedOrder);
                return $pos === false ? 999 : $pos;
            })->values();
        }

        // Just existing names for datalist
        $existingCategories = Gallery::distinct()->pluck('category');

        return view('admin.gallery.index', compact('categories', 'existingCategories'));
    }

    public function show($categoryEncoded)
    {
        $category = base64_decode($categoryEncoded);
        $images = Gallery::where('category', $category)->latest()->get();

        return view('admin.gallery.show', compact('images', 'category', 'categoryEncoded'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_select' => 'required|string',
            'category_new' => 'nullable|string|max:255',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480' // 20MB max per image
        ]);

        // Smart Category Selection & Cleanup
        $rawCategory = $request->category_select === '__NEW__' ? $request->category_new : $request->category_select;
        $category = trim($rawCategory);

        if (empty($category)) {
            if ($request->ajax()) return response()->json(['error' => 'Category name cannot be empty.'], 422);
            return back()->with('error', 'Category name cannot be empty.');
        }

        $uploaded = 0;

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Generate a unique naming
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('gallery', $filename, 'public');

                Gallery::create([
                    'category' => $category,
                    'image_path' => '/storage/' . $path,
                    'title' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), // Initial title
                ]);

                $uploaded++;
            }
        }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'uploaded' => $uploaded]);
        }

        return back()->with('success', $uploaded . ' images uploaded to ' . $category . ' successfully.');
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'old_category' => 'required|string',
            'new_category' => 'required|string|max:255',
        ]);

        $oldCategory = $request->old_category;
        $newCategory = trim($request->new_category);

        if (empty($newCategory)) {
            return back()->with('error', 'Category name cannot be empty.');
        }

        Gallery::where('category', $oldCategory)->update(['category' => $newCategory]);

        return back()->with('success', "Category renamed from '$oldCategory' to '$newCategory' successfully.");
    }

    public function saveOrder(Request $request)
    {
        $request->validate([
            'category_order' => 'required|string',
        ]);

        \App\Models\SiteSetting::updateOrCreate(
            ['key' => 'gallery_category_order'],
            ['value' => $request->category_order]
        );

        return back()->with('success', 'Gallery category order updated successfully.');
    }
    public function destroy($id)
    {
        $image = Gallery::findOrFail($id);
        
        // Remove file
        $relativePath = str_replace('/storage/', '', $image->image_path);
        if (Storage::disk('public')->exists($relativePath)) {
            Storage::disk('public')->delete($relativePath);
        }

        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
