<?php

namespace App\Http\Controllers\API\Admin;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{
    public function editAboutUs(Request $request)
    {
        $about = AboutUs::where(['id' => $request->id])->first();
        $about->update($request->all());

        if($about)
        {
            return response()->json(['about_us' => "yes"]);
        }
        else
        {
            return response()->json(['about_us' => "no"]);
        }
    }
}
