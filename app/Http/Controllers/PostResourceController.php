<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::query()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create($request->validate([
            'slug' => 'required',
            'text' => 'required',
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->fill($request->validate([
            'slug' => 'required',
            'text' => 'required',
        ]));
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }
}
