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

//Route::resource('user','UserController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user','UserController@index');
Route::get('/login','LoginController@index');
//重定向路由
//Route::redirect('/user','/login',301);

Route::get('/user/{id}',function ($id){

})->where('id','[0-9]+');
