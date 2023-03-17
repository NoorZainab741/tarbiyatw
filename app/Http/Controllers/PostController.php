<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $imagePath = array();
        $post = Post::create($request->except('images'));
        if ($request->images) {
            foreach ($request->file('images') as $image) {
                $imagePath[] = $image->store('posts/'.$post->title.'/images', 'public');
            }
            $post->update([
                'images' => $imagePath
            ]);
        }

        return redirect(route('posts.index'))->with('success', 'Post Created Successfully');
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $imagePath = array();
        $post->update($request->except('images'));
        if ($request->images) {
            foreach ($request->file('images') as $image) {
                $imagePath[] = $image->store('posts/'.$post->title.'/images', 'public');
            }
            $post->update([
                'images' => $imagePath
            ]);
        }

        return redirect(route('posts.index'))->with('success', 'Post Updated Successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'))->with('warning', 'Post Deleted Successfully');
    }
}
