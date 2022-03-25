<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();

        // $categories = Category::all();
        return view('front.index', compact(['posts']));
    }
    
    public function aboutMe()
    {
        $userId = Auth::id();

        $user = User::findOrFail($userId);

        return view('front.pages.about-me', compact(['user']));
    }
}
