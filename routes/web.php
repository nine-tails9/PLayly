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


Route::get('/playLists', function () {
    return view('playLists');
});


Route::get('/playPlaylist', function () {
    return view('playPlaylist');
});


Route::get('/CreateplayList', function () {
    return view('CreateplayList');
});

Route::get('/uploadSong', function () {
    return view('uploadSong');
});

Route::get('/allSongs', function () {
    return view('uploadSong');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
