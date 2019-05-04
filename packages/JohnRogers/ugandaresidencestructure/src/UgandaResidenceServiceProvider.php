<?php
namespace JohnRogers\ugandaresidencestructure;

use Illuminate\Support\ServiceProvider;

class UgandaResidenceServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    public function register()
    {
        //
    }
}
