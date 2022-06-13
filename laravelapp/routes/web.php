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

use App\Http\Middleware\HelloMiddleware;

//授業用
Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@index')->middleware('auth');
Route::post('hello','HelloController@post');

Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@add');

Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');

Route::get('hello/del','HelloController@del');
Route::post('hello/del','HelloController@remove');

Route::get('hello/show','HelloController@index');

Route::get('person','PersonController@index');

Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');

Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');

Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');

Route::get('board','BoardController@index');

Route::get('board/add','BoardController@add');
Route::post('board/add','BoardController@create');

Route::resource('rest','RestappController');

Route::get('hello/session','HelloController@ses_get');
Route::post('hello/session','HelloController@ses_put');

Route::get('hello/auth','HelloController@getAuth');
Route::post('hello/auth','HelloController@postAuth');




//実習問題
//2-1
Route::get('Jissyu2', 'JissyuController@index');

//3-1
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');

//3-2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//3-3
Route::get('jissyu5', 'Jissyu3_3Controller@index');

//4-1
Route::get('jissyu6', 'Jissyu4_1Controller@index');
Route::post('jissyu6', 'Jissyu4_1Controller@post');

//5-2

Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'issyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'issyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'issyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

//6-1
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');

//6-3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

//6-4
Route::get('jissyu15', 'Jissyu6_4Controller@index');
Route::get('jissyu15/add', 'Jissyu6_4Controller@add');
Route::post('jissyu15/create', 'Jissyu6_4Controller@create');

//6-5
Route::get('/jissyu16', 'Jissyu6_5Controller@index');
Route::get('/jissyu16/show', 'Jissyu6_5Controller@show');


//7-1
Route::resource('jissyu7_1', 'jissyu7_1@Controller');
Route::post('jissyu7_1/find', 'jissyu7_1Controller@find');	
//Resourcefulにはfind()メソッドはないので追加
Route::get('jissyu7_1/{id}/del', 'jissyu7_1controller@del');
//Resourcefulにはdel()メソッドはないので追加


//kouka
Route::get('kouka1_1', 'kouka1_1Controller@index');

Route::get('kouka1_2', 'kouka1_2Controller@index');
Route::post('kouka1_2', 'kouka1_2Controller@post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('kouka2_1', 'kouka2_1Controller@index');
Route::post('kouka2_1/find', 'kouka2_1Controller@find');


Route::get('kouka2_2', 'Kouka2_2Controller@index');
Route::post('kouka2_2/find', 'Kouka2_2Controller@find');
Route::get('kouka2_2/show', 'Kouka2_2Controller@show');
Route::get('kouka2_2/add', 'Kouka2_2Controller@add');
Route::post('kouka2_2/create', 'Kouka2_2Controller@create');
Route::get('kouka2_2/edit', 'Kouka2_2Controller@edit');
Route::post('kouka2_2/update', 'Kouka2_2Controller@update');
Route::get('kouka2_2/del', 'Kouka2_2Controller@del');
Route::post('kouka2_2/remove', 'Kouka2_2Controller@remove');

//効果測定３
Route::get('book', 'book_Controller@index')->middleware('auth');
// 登録
Route::get('book/add', 'book_Controller@add')->middleware('auth');
Route::post('book/add', 'book_Controller@create');
// 削除
Route::get('book/del', 'book_Controller@delete')->middleware('auth');
Route::post('book/del', 'book_Controller@destroy');
// 更新
Route::get('book/edit', 'book_Controller@edit')->middleware('auth');
Route::post('book/edit', 'book_Controller@update');


//ログインしていないと移動できなくする　Route::get('book', 'Kouka2_2Controller@index')->middleware('auth');

