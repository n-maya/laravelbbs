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

Route::get('/', 'PostsController@toppage')->name('toppage');

Route::get('posts/welcome', 'PostsController@welcome');

Route::get('welcome', 'PostsController@welcome')->name('welcome');

Route::get('index', 'PostsController@index')->name('top');

Route::get('posts/index', 'PostsController@index')->name('top');

Route::resource('posts', 'PostsController', ['only' => ['create', 'store']]);

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);

Route::resource('comments', 'CommentsController', ['only' => ['store']]);

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update']]);

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
