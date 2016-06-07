<?php

namespace App\NeedKeting\Models;

use Illuminate\Database\Eloquent\Model;

class ReportPost extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'report_message',
        'post_id',
        'user_id',
    ];

    /**
     * @var array
     */
    protected $dates = ['created_at','published_at'];
    
}
