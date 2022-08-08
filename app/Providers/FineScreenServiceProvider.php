<?php

namespace App\Providers;
use App\FineScreen\FineScreenClass;

use Illuminate\Support\ServiceProvider;

class FineScreenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('finescreenclass',function(){
            return new FineScreenClass();
        });   
    }
}
