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
            __DIR__ . '/stubs/controller.api.stub' => $this->app->basePath('stubs/controller.api.stub'),
            __DIR__ . '/stubs/controller.invokable.stub' => $this->app->basePath('stubs/controller.invokable.stub'),
            __DIR__ . '/stubs/controller.model.api.stub' => $this->app->basePath('stubs/controller.model.api.stub'),
            __DIR__ . '/stubs/controller.model.stub' => $this->app->basePath('stubs/controller.model.stub'),
            __DIR__ . '/stubs/controller.nested.api.stub' => $this->app->basePath('stubs/controller.nested.api.stub'),
            __DIR__ . '/stubs/controller.nested.stub' => $this->app->basePath('stubs/controller.nested.stub'),
            __DIR__ . '/stubs/controller.plain.stub' => $this->app->basePath('stubs/controller.plain.stub'),
            __DIR__ . '/stubs/controller.stub' => $this->app->basePath('stubs/controller.stub'),
            __DIR__ . '/stubs/model.pivot.stub' => $this->app->basePath('stubs/model.pivot.stub'),
            __DIR__ . '/stubs/model.stub' => $this->app->basePath('stubs/model.stub'),
        ], 'expansion-qcm:stubs');
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
