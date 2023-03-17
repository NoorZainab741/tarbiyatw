<?php

namespace App\Http\Controllers\API\Admin;

use App\linksUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSocialLinksController extends Controller
{
    public function editlinksUs(Request $request)
    {
        $links = SocialLink::where(['id' => $request->id])->first();
        $links->update($request->all());

        if($links)
        {
            return response()->json(['links_us' => "yes"]);
        }
        else
        {
            return response()->json(['links_us' => "no"]);
        }
    }
}
