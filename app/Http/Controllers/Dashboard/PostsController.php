<?php

namespace App\Http\Controllers\Dashboard;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::paginate(10);

        return view('dashboard.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = NEW Posts();
        $data = request()->validate([
            'title' => 'required|min:2|max:255',
            'desc' => 'required|max:16500',
            'content' => 'required|max:16500',
            'category_id' => 'required',
        ]);
        $post->fill($data);
        $post->save();

        return redirect('/dashboard/Posts')->with('status', 'Post Added !!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::findorfail($id);

        return view('dashboard.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Posts::findorfail($id);
        $data = request()->validate([
            'title' => 'required|min:2|max:255',
            'desc' => 'required|max:16500',
            'content' => 'required|max:16500',
            'category_id' => 'required',
        ]);

        $post->fill($data);
        $post->update();

        return redirect('/dashboard/Posts')->with('status', 'Post Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();

        return redirect('/dashboard/Posts')->with('status', 'Post Deleted!!');
    }
}
