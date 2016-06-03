<?php

namespace App\NeedKeting\Models;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'about',
        'privacy',
        'terms',
        'user_id',
        'published_at'
    ];
    
    protected $dates = ['published_at','created_at','updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
