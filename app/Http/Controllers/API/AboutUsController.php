<?php

namespace App\Http\Controllers\API;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function getAboutUs(Request $request)
    {
        $about = AboutUs::get();
        if($about)
        {
            return response()->json(['about' => $about]);
        }
        else
        {
            return response()->json(['about' => []]);
        }
    }
}
