<?php

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

Route::get('/', function () {
    return view('welcome');
});

//test 登录注册
Route::prefix('test/login')->group(function(){//前台登录页
    Route::any('reg','test\LoginController@reg');//后台列表页
    Route::any('login','test\LoginController@login');//后台列表页
    Route::any('info','test\LoginController@info');//后台列表页
});
//凯撒密码
Route::prefix('test/caesar')->group(function(){//前台登录页
    Route::any('geta','test\CaesarController@geta');//后台列表页
    Route::any('seta','test\CaesarController@seta');//后台列表页
});
