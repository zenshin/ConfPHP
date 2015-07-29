<?php

namespace App;

use App\Comment;
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
    public function setDateStartAttribute($value)
    {
        $this->attributes['date_start'] = Carbon::createFromFormat('d-m-Y H:i:s', $value)->toDateTimeString();
    }
    public function setDateEndAttribute($value)
    {
        $this->attributes['date_end'] = Carbon::createFromFormat('d-m-Y H:i:s', $value)->toDateTimeString();
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
    public function scopePublished($query)
    {
        return $query->where('status','publish')->orderBy('date_start')->get();
    }

    public function getComment()
    {
        return Comment::PublishedByPost($this->id)->get();
    }

    public function countComment()
    {
        return $this->getComment()->count();
    }

    public function getTag()
    {
        return Tag::find($this->tag_id);
    }
}
