<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table="games";
    public $timestamps=false;

    public function players(){
        return $this->belongsToMany('App\Player', 'playergames', 'Game_ID', 'Player_ID');
    }
}
