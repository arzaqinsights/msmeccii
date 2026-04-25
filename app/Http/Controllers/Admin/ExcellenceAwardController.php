<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExcellenceAward;
use Illuminate\Http\Request;

class ExcellenceAwardController extends Controller
{
    public function index()
    {
        $awards = ExcellenceAward::orderBy('order')->get();
        return view('admin.excellence.index', compact('awards'));
    }

    public function create()
    {
        return view('admin.excellence.form', ['award' => new ExcellenceAward()]);
    }

    public function store(Request $request)
    {
        return $this->saveAward($request, new ExcellenceAward());
    }

    public function edit(ExcellenceAward $excellence)
    {
        return view('admin.excellence.form', ['award' => $excellence]);
    }

    public function update(Request $request, ExcellenceAward $excellence)
    {
        return $this->saveAward($request, $excellence);
    }

    public function destroy(ExcellenceAward $excellence)
    {
        $excellence->delete();
        return redirect()->route('admin.excellence.index')->with('success', 'Award deleted successfully.');
    }

    private function saveAward(Request $request, ExcellenceAward $award)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'giver_name' => 'required|string|max:255',
            'award_image' => $award->exists ? 'nullable|image|max:2048' : 'required|image|max:2048',
            'giver_image' => 'nullable|image|max:1024',
            'status' => 'required|in:published,draft',
            'order' => 'required|integer',
        ]);

        $data = $request->only(['title', 'description', 'giver_name', 'giver_designation', 'order', 'status']);
        $data['show_on_home'] = $request->has('show_on_home');

        if ($request->hasFile('award_image')) {
            $file = $request->file('award_image');
            $filename = time() . '_award_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/excellence'), $filename);
            $data['award_image'] = '/uploads/excellence/' . $filename;
        }

        if ($request->hasFile('giver_image')) {
            $file = $request->file('giver_image');
            $filename = time() . '_giver_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/excellence'), $filename);
            $data['giver_image'] = '/uploads/excellence/' . $filename;
        }

        $award->fill($data);
        $award->save();

        return redirect()->route('admin.excellence.index')->with('success', 'Wall of Excellence record saved.');
    }
}
