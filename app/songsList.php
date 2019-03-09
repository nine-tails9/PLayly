<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class songsList extends Model
{
    //
    public function songs(){
        return $this->hasOne(Songs::class, 'id', 'songs_id');
    }
    public function playlist(){
        return $this->belongsTo(Playlists::class, 'playlists_id', 'id');
    }
}
