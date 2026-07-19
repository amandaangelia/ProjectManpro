<?php

namespace App\Http\Controllers;


use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.loginAdmin');
    }

    function loginPost(Request $request) {
        $request->validate([
            "username"=>"required",
            "password"=>"required",
        ]);
        // dd($request->input('password'));
        // dd($request->input('username'));

        $credentials = $request->only("username", "password");
        // dd($credentials);

        
        // dd($user);

        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }
        return back()->with('loginError', 'login failed!');
    }
}