<?php

namespace AxayGadekar\Brawlstars;

use Illuminate\Support\ServiceProvider;


/**
 * Class BrawlstarsServiceProvider
 * @package AxayGadekar\Brawlstars
 */
class BrawlstarsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('brawlstars', BrawlStarManager::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../config/brawlstars.php' => config_path('brawlstars.php')
        ]);

    }
}
