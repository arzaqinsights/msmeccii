<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamPageController extends Controller
{
    public function index()
    {
        $pages = TeamPage::orderBy('order')->get();
        return view('admin.team-pages.index', compact('pages'));
    }

    public function create()
    {
        $page = new TeamPage();
        $page->order = (TeamPage::max('order') ?? 0) + 1;
        return view('admin.team-pages.form', ['page' => $page]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:team_pages,slug',
            'status' => 'required|boolean',
        ]);

        $page = new TeamPage();
        $page->title = $request->title;
        $page->slug = $request->slug ?: Str::slug($request->title);
        $page->description = $request->description;
        $page->status = $request->status;
        $page->order = $request->order ?? 0;
        $page->save();

        return redirect()->route('admin.team-pages.index')->with('success', 'Page created successfully.');
    }

    public function edit(TeamPage $team_page)
    {
        return view('admin.team-pages.form', ['page' => $team_page]);
    }

    public function update(Request $request, TeamPage $team_page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:team_pages,slug,' . $team_page->id,
            'status' => 'required|boolean',
        ]);

        $team_page->title = $request->title;
        $team_page->slug = $request->slug ?: Str::slug($request->title);
        $team_page->description = $request->description;
        $team_page->status = $request->status;
        $team_page->order = $request->order ?? 0;
        $team_page->save();

        return redirect()->route('admin.team-pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(TeamPage $team_page)
    {
        $team_page->delete();
        return redirect()->route('admin.team-pages.index')->with('success', 'Page deleted successfully.');
    }
}
