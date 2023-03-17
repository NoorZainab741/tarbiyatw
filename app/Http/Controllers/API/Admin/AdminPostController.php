<?php

namespace App\Http\Controllers\API\Admin;

use App\Datauploading;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function createPost(Request $request)
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
        if($post)
        {
            return response()->json(['post' => 'yes']);
        }
        else
        {
            return response()->json(['post' => 'no']);
        }
    }
    public function editPost(Request $request)
    {
        $imagePath = array();

        $post = Post::where('id', $request->id)->first();

        $post->update($request->except('images'));
        if ($request->images) {
            foreach ($request->file('images') as $image) {
                $imagePath[] = $image->store('posts/'.$post->title.'/images', 'public');
            }
            $post->update([
                'images' => $imagePath
            ]);
        }
        if($post)
        {
            return response()->json(['post' => 'yes']);
        }
        else
        {
            return response()->json(['post' => 'no']);
        }
    }
    public function deletePost(Request $request)
    {
        $post = Post::where('id', $request->id)->first();
        $post->delete();
    
        
        if($post)
        {
            return response()->json(['post' => "deleted"]);
        }
        else
        {
            return response()->json(['post' => "not deleted"]);
        }
    }
}
