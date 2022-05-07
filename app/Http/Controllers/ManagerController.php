<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function index()
    {
        $user = User::where('role', 1)->get();
        return view('admin.pages.manager.index', [
            'user' => $user,
        ]);
    }
}
