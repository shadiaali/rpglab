<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function discussions() {
        return $this->hasMany('Webdevmatics\Chatter\Models', 'character_id', 'current_character_id');
    }
}
