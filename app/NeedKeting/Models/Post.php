<?php

namespace App\NeedKeting\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'published_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'content',
        'image',
        'location',
        'user_id',
        'published_at'
    ];

    protected $appends = [
        'tag_list'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\NeedKeting\Models\Tag')->withTimestamps();
    }


    /**
     * Posts belongs to one user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * Getting User Name using User id
     *
     * @return mixed
     */
    public function getUserAttribute()
    {
        return $this->user()->first()->name;
    }

    /**
     * @return mixed
     */
    public function getUserImageAttribute()
    {
        return $this->user()->first()->image;
    }
    /**
     * @param $value
     * @return string
     */
    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\NeedKeting\Models\Comment');
    }


    /**
     * List of tag id for editing posts
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags()->lists('id')->toArray();
    }

}
