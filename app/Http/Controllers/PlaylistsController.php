<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlists;
use App\User;
use App\songsList;
use Auth;
class PlaylistsController extends Controller
{
    //
    public function store(Request $req)
    {
        # code...
        $name = $req['name'];
        $play = new Playlists;
        $play->name = $name;
        $play->user()->associate(Auth::user());
        $play->save();
        foreach($req['songs'] as $s){
            $song = new songsList;
            $song->playlist()->associate($play);
            $song->song_id = $s;
            $song->save();
        }
        return back();
    }
}
