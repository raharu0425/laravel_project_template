<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * ダッシュボード
     */
    public function index(Request $request)
    {
        return view("dashboard/index", [
        ]);
    }
}
