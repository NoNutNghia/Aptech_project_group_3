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

// Route admin
Route::resource('/articles', 'VirusArticleController')->middleware(['auth']);
Route::resource('/users', 'UserController')->middleware(['auth']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
