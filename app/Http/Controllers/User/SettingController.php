<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Validator;
use App\Models\User;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        return view('user.pages.setting.index');
    }
    public function info(Request $request)
    {
        $id = Auth::user()->id;
        $password = $request->password;
        $user = User::where('id', $id)->where('real_pass', $password)->first();
        if($user){
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
    public function edit_password(Request $request)
    {
        $id = Auth::user()->id;
        $password = $request->password;
        $user = User::where('id', $id)->update(['password'=>Hash::make($password),'real_pass'=>$password]);
        return response()->json(true);
    }
    public function edit_email(Request $request)
    {
        $id = Auth::user()->id;
        $rules = [
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id),
            ]
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(false);
        } else {
            $user = User::where('id', $id)->update(['email'=>$request->email]);
            return response()->json(true);
        }
    }
}
