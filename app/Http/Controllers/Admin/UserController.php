<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Avatar;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('role', 2)->get();
        return view('admin.pages.users.index', [
            'user' => $user,
        ]);
    }
    public function detail(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        dd($user);
        return view('admin.pages.users.index', [
            'user' => $user,
        ]);
    }
}
