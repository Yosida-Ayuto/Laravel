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

//授業用
Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@index');



//実習問題
//２－１
Route::get('Jissyu2', 'JissyuController@index');