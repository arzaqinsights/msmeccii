<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::orderBy('order')->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:10240'
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('sliders', $filename, 'public');

                HomeSlider::create([
                    'image_path' => '/storage/' . $path,
                    'order' => HomeSlider::max('order') + 1,
                    'is_active' => true,
                ]);
            }
        }

        return back()->with('success', 'Slider images uploaded successfully.');
    }

    public function update(Request $request, HomeSlider $slider)
    {
        $request->validate([
            'order' => 'required|integer',
            'is_active' => 'required|boolean',
        ]);

        $slider->update($request->only('order', 'is_active'));

        return back()->with('success', 'Slider updated successfully.');
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'exists:home_sliders,id'
        ]);

        foreach ($request->order as $index => $id) {
            HomeSlider::where('id', $id)->update(['order' => $index]);
        }

        return response()->json(['success' => true]);
    }

    public function destroy(HomeSlider $slider)
    {
        $relativePath = str_replace('/storage/', '', $slider->image_path);
        if (Storage::disk('public')->exists($relativePath)) {
            Storage::disk('public')->delete($relativePath);
        }

        $slider->delete();

        return back()->with('success', 'Slider image deleted successfully.');
    }
}
