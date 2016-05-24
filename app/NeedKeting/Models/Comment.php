<?php

namespace App\NeedKeting\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    /**
     * Fillable Columns
     *
     * @var array
     */
    protected $fillable = ['content','image','published_at','post_id','user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\NeedKeting\Post');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * @return mixed
     */
    public function getUserAttribute()
    {
        return $this->user()->first()->name;
    }

    public function getUserImageAttribute()
    {
        return $this->user()->first()->image;
    }
}
