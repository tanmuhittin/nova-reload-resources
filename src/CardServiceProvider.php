<?php

namespace Tanmuhittin\ReloadResources;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('reload-resources', __DIR__.'/../dist/js/card.js');
            Nova::style('reload-resources', __DIR__.'/../dist/css/card.css');
        });
    }
}
