<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function categoryPost(){
        return $this->belongsTo('app\Post');
    }
}