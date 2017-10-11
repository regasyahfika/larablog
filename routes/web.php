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

Route::get('dashboard', function () {
    return view('back.dashboard.index');
});

Route::get('categories', function () {
	return view('back.categories.index');
});

Route::get('posts', function () {
	return view('back.posts.index');
});




// Route::resource('post','PostController');