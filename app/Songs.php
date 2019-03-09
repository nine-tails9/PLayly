<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    public function songs(){
        return $this->belongsToMany(songsList::class);
    }
    public function playlists(){
        return $this->belongsToMany(playLists::class);
    }
}
