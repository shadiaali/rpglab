<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{

    protected $fillable = [
        'filename', 'character_id',
    ];

    public function character() {
        return $this->belongsTo('App\Character', 'character_id', 'id');
    }

    
}
