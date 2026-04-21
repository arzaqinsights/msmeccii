<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GrowthRecord;
use Illuminate\Http\Request;

class GrowthRecordController extends Controller
{
    public function index()
    {
        $records = GrowthRecord::orderBy('group')->orderBy('category')->orderBy('year')->get()->groupBy('group');
        return view('admin.growth.index', compact('records'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'group' => 'required|string',
            'category' => 'required|string',
            'sub_category' => 'nullable|string',
            'year' => 'required|string',
            'value' => 'required|string',
            'label' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        GrowthRecord::create($validated);

        return back()->with('success', 'Stat record added successfully.');
    }

    public function update(Request $request, GrowthRecord $growth)
    {
        $validated = $request->validate([
            'group' => 'required|string',
            'category' => 'required|string',
            'sub_category' => 'nullable|string',
            'year' => 'required|string',
            'value' => 'required|string',
            'label' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $growth->update($validated);

        return back()->with('success', 'Stat record updated successfully.');
    }

    public function destroy(GrowthRecord $growth)
    {
        $growth->delete();
        return back()->with('success', 'Stat record deleted.');
    }
}
