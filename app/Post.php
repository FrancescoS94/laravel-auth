<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug',
        'update_at'
    ];

    public function posts()
    {
        return $this->belongsTo('App\User');
    }
}
