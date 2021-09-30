<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'title',
        'slug'
    ];

    public function tag()
    {
        return $this->hasOne(Tag::class);
    }

//    public function posts()
//    {
//        return $this->hasMany(Post::class);
//    }
}