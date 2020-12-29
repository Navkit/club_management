<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table="players";
    public $timestamps=false;
    public  function card(){
        return $this->belongsTo(Card::Class,'Card_ID');
    }
    public function games(){
        return $this->belongsToMany('App\Game', 'playergames', 'Player_ID', 'Game_ID');
    }
}
