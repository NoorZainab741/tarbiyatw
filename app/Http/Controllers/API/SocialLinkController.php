<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function getSocialLinks(Request $request)
    {
        $links = SocialLink::get();
        if($links)
        {
            return response()->json(['links' => $links]);
        }
        else
        {
            return response()->json(['links' => []]);
        }
    }
}
