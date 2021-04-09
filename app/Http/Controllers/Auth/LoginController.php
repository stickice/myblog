<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // 退出后重定向到登录页
    public function loggedOut(Request $request)
    {
        return redirect('/login');
    }
}
