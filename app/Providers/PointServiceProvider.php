<?php
/*
 * Copyright US Tech Solutions. 
 * All rights reserved.
 * File: PointServiceProvider.php
 * Project: Cricket Assignment
 * Author: Ratnesh Kumar Rai
 * CreatedOn: date (22/09/2019) 
*/
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Implement\Point;

class PointServiceProvider extends ServiceProvider
{
    protected $defer = true;
    
      /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\PointContract', function(){
            return new Point();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Helpers\Contracts\PointContract'];
    }

}