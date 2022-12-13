<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        var_dump($request->input("user_id"));
        //なぜ変更入らないんだろうか？
        return "aaaaa";
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
