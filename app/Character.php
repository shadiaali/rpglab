<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function discussion()
    {
        return $this->hasMany(Models::className(Discussion::class), 'chatter_discussion_id');
    }
}
