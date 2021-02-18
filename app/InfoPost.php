<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{
    public $timestamps = false;

    //Db relationships
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
