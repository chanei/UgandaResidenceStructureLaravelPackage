<?php
namespace JohnRogers\ugandaresidencestructure;

use Illuminate\Support\ServiceProvider;

class UgandaResidenceServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        //
    }
}
