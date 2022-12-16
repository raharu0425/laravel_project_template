<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * ログインTOP画面
     */
    public function index(Request $request)
    {
        return view("login/index", []);
    }

    public function test(Request $request)
    {
        var_dump($request->input("user_id"));
        return view("welcome", []);
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
