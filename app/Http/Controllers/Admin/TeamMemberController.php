<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamPage;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index(TeamPage $team_page)
    {
        $members = $team_page->members()->orderBy('order')->get();
        return view('admin.team-pages.members.index', compact('team_page', 'members'));
    }

    public function create(TeamPage $team_page)
    {
        return view('admin.team-pages.members.form', ['team_page' => $team_page, 'member' => new TeamMember()]);
    }

    public function edit(TeamPage $team_page, TeamMember $member)
    {
        return view('admin.team-pages.members.form', compact('team_page', 'member'));
    }

    public function store(Request $request, TeamPage $team_page)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'designation' => 'required|string|max:255',
        ]);

        $member = new TeamMember();
        $member->team_page_id = $team_page->id;
        $member->name = $request->name;
        $member->company_name = $request->company_name;
        $member->designation = $request->designation;
        $member->description = $request->description;
        $member->social_links = $request->social_links;
        $member->order = $request->order ?? 0;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/team'), $filename);
            $member->image = '/uploads/team/' . $filename;
        }

        $member->save();

        return redirect()->route('admin.team-pages.members.index', $team_page->id)->with('success', 'Member added successfully.');
    }

    public function update(Request $request, TeamPage $team_page, TeamMember $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'designation' => 'required|string|max:255',
        ]);

        $member->name = $request->name;
        $member->company_name = $request->company_name;
        $member->designation = $request->designation;
        $member->description = $request->description;
        $member->social_links = $request->social_links;
        $member->order = $request->order ?? 0;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/team'), $filename);
            $member->image = '/uploads/team/' . $filename;
        }

        $member->save();

        return redirect()->route('admin.team-pages.members.index', $team_page->id)->with('success', 'Member updated successfully.');
    }

    public function destroy(TeamPage $team_page, TeamMember $member)
    {
        $member->delete();
        return redirect()->route('admin.team-pages.members.index', $team_page->id)->with('success', 'Member deleted successfully.');
    }
}
