<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'author',
        'publication_date'
    ];

    //Db relationships
    public function infoPost()
    {
        return $this->hasOne('App\InfoPost');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
