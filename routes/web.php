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
})->middleware('auth');


Route::get('/playPlaylist/{id}', function () {

    $list = Playlists::find(request()->id);
    $songss = $list->songs()->get();
    
    $songs= array();
    foreach($songss as $song){
        array_push($songs, $song->songs);
    }
    return view('playPlaylist', compact('songs'));
})->middleware('auth');


Route::get('/CreateplayList', function () {
    $songs = Songs::all();
    return view('CreateplayList', compact('songs'));
})->middleware('auth');

Route::post('/CreateplayList', 'PlaylistsController@store');


Route::get('/uploadSong', function () {
    return view('uploadSong');
})->middleware('auth');

Route::post('/uploadSong', 'SongsController@store');
Route::get('/allSongs', function () {
    $songs = Songs::all();
    return view('allSongs',  compact('songs'));
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
