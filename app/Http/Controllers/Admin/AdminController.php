<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function changePassword(Request $request)
    {
        $validator = $request->validate([
            'password' => 'required|max:255|min:5'
        ]);

        $reset_password = DB::table('users')->where('id',decrypt($request->objectId))->update(['password' => bcrypt($request->password)]);
        return view('admin.index')->with("message","Successful!! Password has been changed");
    }

    public function changeEmail(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|max:255|min:14'
        ]);

        $reset_email = DB::table('users')->where('id',decrypt($request->objectId))->update(['email' => $request->email]);
        return view('admin.index')->with("message","Successful!! Email has been changed");
    }
}
