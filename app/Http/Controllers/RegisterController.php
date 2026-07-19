<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register() {
        return view('admin.RegistrationAdmin');
    }
    
    function regisPost(Request $request) {
        $validatedData = $request->validate([
            "nama"=>"required",
            "username"=>"required",
            "password"=>"required",
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        session()->flash('success','Admin Telah Ditambahkan');
        
        return redirect('/login');
    }
}
