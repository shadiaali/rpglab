<?php

namespace Webdevmatics\Chatter\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'chatter_categories';
    public $timestamps = true;
    public $with = 'parents';

    protected $fillable = ['parent_id', 'order', 'name', 'color', 'slug'];


    public function discussions()
    {
        return $this->hasMany(Models::className(Discussion::class),'chatter_category_id');
    }

    public function parents()
    {
        return $this->hasMany(Models::classname(self::class), 'parent_id')->orderBy('order', 'asc');
    }
}
