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
//test/testにアクセスしたらTestControllerに飛ばすルーティング
Route::get('/tests/test','TestController@index');
// Route::get('/contact/index','ContactFormController@index');
//contact/indexのアクセス制限　prefix=>ファイル名、middleware=>認証auth 
Route::group(['prefix' => 'contact', 'middleware' => 'auth'],function(){
    Route::get('index','ContactFormController@index')->name('contact.index');
    Route::get('create', 'ContactFormController@create')->name('contact.create');
    Route::post('store', 'ContactFormController@store')->name('contact.store');
});

//Rest
// Route::resource('contacts', 'ContactFormcontroller');
Auth::routes();
//->name('home');URLの名前変更
Route::get('/home', 'HomeController@index')->name('home');
