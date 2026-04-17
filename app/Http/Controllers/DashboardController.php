<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $is_admin = Auth::user()->role === 'admin';
        if ($is_admin) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('account.dashboard');
        }
    }
}
