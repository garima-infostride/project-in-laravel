<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use Session;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function makeLogin(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'username' => 'required',
        ]);

        $data = array(
            'username' => $request->username,
            'password' => $request->password
        );

        if (Auth::guard('admin')->attempt($data)) {
            return redirect('dashboard');
        } else {
            return back()->withErrors(['message' => 'invalid email or password']);
        }
        // $admin = admin::where('username', $request->username)->where('password',$request->password)->get()->toArray();
        // if($admin){
        //     return redirect('dashboard');
        // }
        // else{
        //     return back()->withErrors(['message' => 'invalid email or password']);
        // }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
