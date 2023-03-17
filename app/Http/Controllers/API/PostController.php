<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts(Request $request)
    {
        $all_posts = Post::where(['type' => $request->type])->get()->all();
        if($all_posts)
        {
            return response()->json(['all_posts' => $all_posts]);
        }
        else {
            return response()->json(['all_posts' => []]);
        }
    }
}
