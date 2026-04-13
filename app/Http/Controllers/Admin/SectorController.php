<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::withCount('sections')->latest()->paginate(10);
        $settings = \App\Models\SiteSetting::whereIn('key', ['sector_home_count', 'sector_home_layout'])->pluck('value', 'key')->toArray();
        return view('admin.sectors.index', compact('sectors', 'settings'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'sector_home_count' => 'required|integer|min:1|max:24',
            'sector_home_layout' => 'required|in:grid,scroll',
        ]);

        \App\Models\SiteSetting::updateOrCreate(['key' => 'sector_home_count'], ['value' => $request->sector_home_count]);
        \App\Models\SiteSetting::updateOrCreate(['key' => 'sector_home_layout'], ['value' => $request->sector_home_layout]);

        return back()->with('success', 'Global Homepage Sector layout settings updated.');
    }

    public function create()
    {
        $sector = new Sector();
        return view('admin.sectors.form', compact('sector'));
    }

    public function store(Request $request)
    {
        return $this->saveSector($request, new Sector());
    }

    public function edit(Sector $sector)
    {
        $sector->load('sections');
        return view('admin.sectors.form', compact('sector'));
    }

    public function update(Request $request, Sector $sector)
    {
        return $this->saveSector($request, $sector);
    }

    public function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('admin.sectors.index')->with('success', 'Sector deleted successfully.');
    }

    private function saveSector(Request $request, Sector $sector)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $sector->title = $request->title;
        $sector->slug = $request->slug ?: Str::slug($request->title);
        $sector->description = $request->description;
        $sector->status = $request->status;

        // Process File Upload
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sectors'), $filename);
            $sector->thumbnail = '/uploads/sectors/' . $filename;
        }

        $sector->save();

        // Handle dynamic blocks
        if ($request->has('blocks_data')) {
            $blocks = json_decode($request->blocks_data, true);
            
            // Delete old sections to recreate perfectly sequenced ones
            $sector->sections()->delete();
            
            if (is_array($blocks) && count($blocks) > 0) {
                foreach ($blocks as $index => &$block) { // passed by reference to modify value
                    
                    // Handle direct image block uploads dynamically
                    if ($block['type'] === 'image' && isset($block['id']) && $request->hasFile("block_images.{$block['id']}")) {
                        $file = $request->file("block_images.{$block['id']}");
                        $filename = time() . "_block_" . $file->getClientOriginalName();
                        $file->move(public_path('uploads/sectors/blocks'), $filename);
                        $block['value'] = '/uploads/sectors/blocks/' . $filename;
                    }

                    $sector->sections()->create([
                        'type' => $block['type'],
                        'content' => $block, // Saving the whole block as json payload
                        'order' => $index,
                    ]);
                }
            }
        }

        return redirect()->route('admin.sectors.index')->with('success', 'Sector page saved successfully.');
    }
}
