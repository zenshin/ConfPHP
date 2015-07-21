<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'email',
        'content'
    ];
    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
