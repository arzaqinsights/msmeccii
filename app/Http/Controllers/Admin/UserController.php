<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount('submissions')
                     ->latest()
                     ->paginate(20);
                     
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::with(['submissions.form', 'submissions.awardCategory'])->findOrFail($id);
        
        return view('admin.users.show', compact('user'));
    }
}
