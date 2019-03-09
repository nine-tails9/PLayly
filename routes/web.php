<?php
use App\Songs;
use App\Playlists;
use App\songsList;
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
    $list = Auth::user()->playlists()->get();
    return view('MyplayLists', compact('list'));
});


Route::get('/playPlaylist/{id}', function () {

    $list = Playlists::find(request()->id);
    $songs = $list->songs()->get();
    return view('playPlaylist', compact('songs'));
});


Route::get('/CreateplayList', function () {
    $songs = Songs::all();
    return view('CreateplayList', compact('songs'));
});

Route::post('/CreateplayList', 'PlaylistsController@store');


Route::get('/uploadSong', function () {
    return view('uploadSong');
});

Route::post('/uploadSong', 'SongsController@store');
Route::get('/allSongs', function () {
    $songs = Songs::all();
    return view('allSongs',  compact('songs'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
