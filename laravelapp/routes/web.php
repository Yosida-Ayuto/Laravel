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
Route::post('hello','HelloController@post');



//実習問題
//２－１
Route::get('Jissyu2', 'JissyuController@index');
//３－１
Route::get('jissyu3_1', 'Jissyu3_1Controller@index');
Route::post('jissyu3_1', 'Jissyu3_1Controller@post');

//3-2
Route::get('jissyu3_2', 'Jissyu3_2Controller@index');
Route::post('Jissyu3_2', 'Jissyu3_2Controller@post');
