<?php

namespace App\App\NeedKeting\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'notification',
        'is_unread'
    ];
}
