<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('isPublished', true)->get();
        return view('pages.posts',compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|min:5|max:255', 'body' => 'required|string|min:10|max:5000']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findorfail($id);
        return view('pages.post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function createPost()
    {
       return view('pages.createpost');
    }
}


