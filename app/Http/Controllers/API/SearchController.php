<?php

namespace App\Http\Controllers\API;

use App\Datauploading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request)
    {
        $results =DataUploading::where('title', 'like', '%' . $request->term . '%')->get();
        if($results)
        {
            return response()->json(['results' => $results]);
        }
        else
        {
            return response()->json(['results' => []]);
        }
    }
}
