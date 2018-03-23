<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['telephone' => $request->telephone, 'password' => $request->password])) {
            // 认证通过...
            User::updateIP(Auth::user()->id);
            return redirect()->intended('/home');
        }
        return redirect()->back()->withInput()->withErrors(['e' => '用户名或密码错误']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
