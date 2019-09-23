<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Implement\Match;

class MatchServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Helpers\Contracts\MatchContract', function(){
            return new Match();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Helpers\Contracts\MatchContract'];
    }

}