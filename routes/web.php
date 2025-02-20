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

Route::get('/hello/{name?}', 'HelloController@index')->name('hello.index');
Route::post('/hello/{name?}', 'HelloController@render');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function() {

    Route::resource('pages', 'Admin\PagesController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
