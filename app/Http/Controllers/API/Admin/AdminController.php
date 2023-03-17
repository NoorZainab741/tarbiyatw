<?php

namespace App\Http\Controllers\API\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function getSubAdmins(Request $request)
    {
        $data = User::where([['is_super_admin', '0'],['role', 'admin']])->get();
        if($data)
        {
            return response()->json(['sub_admin' => $data]);
        }
        else
        {
            return response()->json(['sub_admin' => []]);
        }
    }

    public function createSubAdmin(Request $request)
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
                return response()->json(["profile" => "update"]);
            }else
            {
                return response()->json(["profile" => "Profile Not Updated"]);
            }

    }

    public function editSubAdmin(Request $request)
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
    public function deleteSubAdmin(Request $request)
    {
        $admin = User::where('id', $request->id)->first();
        $admin->delete();

        if($admin)
        {
            return response()->json(['sub_admin' => "yes"]);
        }
        else
        {
            return response()->json(['sub_admin' => "no"]);
        }    
     }

}
