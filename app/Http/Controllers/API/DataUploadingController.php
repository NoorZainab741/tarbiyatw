<?php

namespace App\Http\Controllers\API;

use App\Datauploading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataUploadingController extends Controller
{
    public function getDataWithSubMenu(Request $request)
    {
        $data = Datauploading::where(['sub_menu_id' => $request->sub_menu_id])->get()->all();
        if($data)
        {
            return response()->json(['data' => $data]);
        }
        else
            {
            return response()->json(['data' => []]);
        }
    }

    public function getDataWithoutSubMenu(Request $request)
    {
        $data = Datauploading::where(['module_id' => $request->module_id])->get()->all();
        if($data)
        {
            return response()->json(['data' => $data]);
        }
        else
            {
            return response()->json(['data' => []]);
        }
    }
}
