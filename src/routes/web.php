<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/php-info', 'App\Http\Controllers\LoginController@phpInfo')->name('php-info');
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login.index');
Route::post('/login/start', 'App\Http\Controllers\LoginController@start')->name('login.start');

//AdminLTE
Route::get('/adminlte', function () { return view('adminlte'); });

/*
Route::get('/', function () {
    return view('welcome');
});
 */
