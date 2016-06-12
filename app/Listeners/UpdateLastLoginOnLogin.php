<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateLastLoginOnLogin
{
    /**
     * @var Guard
     */
    private $auth;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $this->auth->user();
        
        $user->last_login_at = Carbon::now();

        $user->save();
    }
}
