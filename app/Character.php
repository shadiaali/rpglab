<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $fillable = [
        'user_id', 'character_name',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function discussions() {
        return $this->hasMany('packages/Webdevmatics\Chatter\Models', 'character_id', 'character_id');
    }

    public function posts() {
        return $this->hasMany('packages/Webdevmatics\Chatter\Models', 'character_id', 'id');
    }

    public function post() {
        return $this->hasMany('packages/Webdevmatics\Chatter\Models', 'character_id', 'id');
    }

    public function awards() {
        return $this->hasMany('App\Award','character_id', 'id');
    }

    public function award() {
        return $this->hasMany('App\Award','character_id', 'id');
    }


}
