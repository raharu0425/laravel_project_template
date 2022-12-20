<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;

class LoginController extends Controller
{
    /**
     * ログインTOP画面
     */
    public function index(Request $request)
    {
        return view("login/index", [
        ]);
    }

    /**
     * ログイン実行
     */
    public function start(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'ログインに失敗しました',
        ]);
    }

    /**
     * PHPINFO(ローカルのみ使用可能)
     */
    public function phpInfo()
    {
        if(getenv("APP_ENV") == "local"){
           phpinfo();
        }
    }
}
