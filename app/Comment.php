<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'email',
        'message',
        'post_id'
    ];
    public function posts()
    {
        return $this->belongsTo('App\Post');
    }

    public function scopePublishedByPost($query, $post_id=null)
    {
        return $query->whereRaw('status=? AND post_id=?', ['publié', (int) $post_id]);
    }
    public function getPost()
    {
        return Post::find($this->post_id);
    }
}
