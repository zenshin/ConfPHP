<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_start',
        'date_end'
    ];

    public function getDateStartAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }
    public function getDateEndAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    protected $fillable =[
        'title',
        'excerpt',
        'content',
        'date_start',
        'date_end',
        'thumbnail_link',
        'url_site',
        'status',
        'tag_id',
        'slug'
    ];

    //mutator
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    //scope
    public function scopePublished($query, $id=null)
    {
        if(is_null($id))

            return $query->whereRaw('status=? AND id=?', ['publish', (int) $id]);
    }

}
