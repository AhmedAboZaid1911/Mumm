<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Categories;
use App\Posts;

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
        $categories = Categories::inRandomOrder()->limit(4)->get();
        $posts = Posts::inRandomOrder()->limit(4)->get();
        return view('home',compact('posts','categories'));
    }

    public function categories()
    {
        $categories = Categories::get();
        return view('categories',compact('categories'));
    }
    public function category($id)
    {
        $category = Categories::findorfail($id);
        $posts = Posts::where('category_id',$id)->get();
        return view('category',compact('category','posts'));
    }

    public function posts()
    {
        $posts = Posts::all();
        return view('posts',compact('posts'));
    }

    public function post($cid,$id)
    {
        $post = Posts::findorfail($id);
        return view('post',compact('post'));
    }
}
