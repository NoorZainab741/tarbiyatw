<?php

namespace App\Http\Controllers\API\Admin;

use App\YoutubeLinks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminYoutubeLinksController extends Controller
{
    public function getYoutubeLink()
    {

        $youtubelink = YoutubeLinks::take(5)->get();
        if($youtubelink)
        {
            return response()->json(['youtubelink' => $youtubelink]);
        }
        else
            {
            return response()->json(['youtubelink' => []]);
        }
    }
    public function createYoutubeLink(Request $request)
    {
        $youtubelink = YoutubeLinks::create($request->except('image'));

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('youtubelink/' . $youtubelink->id . '/image', 'public');
            $youtubelink->update([
                'image' => $image_path
            ]);
        }
        if($youtubelink)
        {
            return response()->json(['youtubelink' => 'yes']);
        }
        else
        {
            return response()->json(['youtubelink' => 'no']);
        }
    }
    public function editYoutubeLink(Request $request)
    {
        $youtubelink = YoutubeLinks::where('id', $request->id)->first();
        $youtubelink->update($request->except('image','_token','_method'));


        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('youtubelink/' . $youtubelink->id . '/image', 'public');
            $youtubelink->update([
                'image' => $image_path
            ]);
        }
        if($youtubelink)
        {
            return response()->json(['youtubelink' => 'yes']);
        }
        else
        {
            return response()->json(['youtubelink' => 'no']);
        }
    }
    public function deleteYoutubeLink(Request $request)
    {
        $youtubelink = YoutubeLinks::where('id', $request->id)->first();
        $youtubelink->delete();
        if($youtubelink)
        {
            return response()->json(['youtubelink' => "deleted"]);
        }
        else
        {
            return response()->json(['youtubelink' => "not deleted"]);
        }
    }
}
