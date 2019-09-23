<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Implement\Team;

class TeamServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Helpers\Contracts\TeamContract', function(){
            return new Team();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Helpers\Contracts\TeamContract'];
    }

}