<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlists extends Model
{
    //
    protected $fillable = [
        'name', 'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
 
    public function song(){
        return $this->hasOne(Songs::class);
    }
}
