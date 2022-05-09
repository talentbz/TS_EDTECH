<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        return view('user.pages.setting.index');
    }
    public function info(Request $request)
    {
        $email = Auth::user()->email;
        $password = $request->password;
        $user = User::where('email', $email)->where('real_pass', $password)->first();
        if($user){
            return response()->json(true);
        } else {
            return response()->json(false);
        }
        return view('user.pages.setting.index');
    }
}
