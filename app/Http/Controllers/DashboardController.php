<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = $user->role_id;
        // dd($role);
        return view('dashboard', compact('role'));
    }

    public function users()
    {
        $user = Auth::user();
        if ($user->role_id != 3) {
            return redirect('dashboard');
        }

        $users = User::all();
        return view('users', compact('users'));
    }
}
