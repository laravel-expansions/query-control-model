<?php

namespace LaravelExpansions\QueryControlModel;

use Illuminate\Support\ServiceProvider;

class ExpansionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/stubs/controller.model.api.stub' => $this->app->basePath('stubs/controller.model.api.stub'),
            __DIR__ . '/stubs/controller.model.stub' => $this->app->basePath('stubs/controller.model.stub'),
            __DIR__ . '/stubs/model.stub' => $this->app->basePath('stubs/model.stub'),
        ], 'expansion-qcm-stubs');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
