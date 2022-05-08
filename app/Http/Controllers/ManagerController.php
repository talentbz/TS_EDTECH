<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('role', 1)->get();
        return view('admin.pages.manager.index', [
            'user' => $user,
        ]);
    }
    public function add(Request $request) 
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->real_pass = $request->password;
        $user->role = 1;
        $user->save();
        return redirect()->route('manager.index');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->real_pass = $request->password;
        $user->role = 1;
        $user->save();
        return response()->json(['result' => true, 'data' => $user]);
    }
    public function detail(Request $request){
        $id = $request->id;
        $user = User::findOrFail($id);
        return response()->json(['result' => true, 'data' => $user]);
    }
    public function delete(Request $request){
        $id = $request->id;
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['result' => true, 'data' => $user]);
    }
}
