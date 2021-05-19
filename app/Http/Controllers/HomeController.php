<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts_amount = Post::count();
        $reviews_amount = Review::count();
        
        return view("admin.index", [
            'posts_amount'=>$posts_amount,
            'reviews_amount'=>$reviews_amount,
        ]);
    }
}
