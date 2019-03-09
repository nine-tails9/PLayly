<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class songsList extends Model
{
    //
    public function songs(){
        return $this->hasMany(Songs::class);
    }
    public function playlist(){
        return $this->belongsTo(Playlists::class);
    }
}
