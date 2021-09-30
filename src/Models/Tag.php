<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tile' => 'Title1',
        'slug' => 'Slug1'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}