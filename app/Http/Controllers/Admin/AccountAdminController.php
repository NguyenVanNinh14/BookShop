<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountAdminController extends Controller
{
    public function login(){

        return view('admins.account');
    }

    public function checkLogin(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }

        return back()->withErrors([
            'email' => 'Tài khoản hoặc mật khẩu bị sai.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
