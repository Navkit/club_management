<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table="cards";
    public $timestamps=false;
    public  function players(){
        return $this->hasMany(Player::Class,'Card_ID');
    }
    public  function partners(){
        return $this->hasMany(Partner::Class,'Card_ID');
    }
}
