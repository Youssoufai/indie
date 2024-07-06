<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->withErrors('Please log in to access the dashboard.');
        }

        $posts = $user->posts()->latest()->paginate(6);
        return view('users.dashboard', ['posts' => $posts]);
    }
}
