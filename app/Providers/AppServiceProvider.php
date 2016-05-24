<?php

namespace App\Providers;

use App\View\Composers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->composer(['admin.master.layouts'],Composers\AddStatusMessage::class);
        $this->app['view']->composer(['users.master.layouts'],Composers\AddStatusMessage::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
