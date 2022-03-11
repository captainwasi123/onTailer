<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(){

        return view('admin.login');
    }

    public function loginSubmit(Request $request){
        $data = $request->all();

        if(Auth::guard('admin')->attempt(['username' => $data['username'], 'password' => $data['password']])){
            return redirect(route('admin.dashboard'));
        }else{
            return redirect()->back()->with('error', 'Incorrect Username or Password.');
        }
    }
}
