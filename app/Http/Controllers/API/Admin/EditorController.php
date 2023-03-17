<?php

namespace App\Http\Controllers\API\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class EditorController extends Controller
{

    public function getEditors(Request $request)
    {
        $data = User::where([['is_super_admin', '0'],['role', 'editor']])->get();
        if($data)
        {
            return response()->json(['editor' => $data]);
        }
        else
        {
            return response()->json(['editor' => []]);
        }
    }

    public function createEditor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create($request->all());

        $user->update([
            'password' => bcrypt($request->password),
        ]);

        if($user)
            {
                return response()->json(["profile" => "Created"]);
            }else
            {
                return response()->json(["profile" => "Profile Not Created"]);
            }

    }

    public function editEditor(Request $request)
    {
        if($request->password == '')
        {


            $user = User::where('id',$request->id )->first();
            $user->update($request->except('image','password'));
            if ($request->image)
            {
                $image_path = $request->file('image')->store('user/'.$user->id.'/image', 'public');
                $user->update([
                    'image' => $image_path
                ]);
            }
            if($user)
            {
                return response()->json(["profile" => "update"]);
            }else
            {
                return response()->json(["profile" => "Profile Not Updated"]);
            }
        }else
        {

            $user = User::where('id',$request->id )->first();
            $user->update($request->except('password','image'));
            $user->update([
                "password" => Hash::make($request->password)
            ]);
            if ($request->image)
            {
                $image_path = $request->file('image')->store('user/'.$user->id.'/image', 'public');
                $user->update([
                    'image' => $image_path
                ]);
            }


            if($user)
            {
                return response()->json(["profile" => "update"]);
            }else
            {
                return response()->json(["profile" => "Profile Not Updated"]);
            }
        }   
    }
    public function deleteEditor(Request $request)
    {
        $editor = User::where('id', $request->id)->first();
        $editor->delete();
        if($editor)
        {
            return response()->json(['editor' => "yes"]);
        }
        else
        {
            return response()->json(['editor' => "no"]);
        }     
        
    }

}
