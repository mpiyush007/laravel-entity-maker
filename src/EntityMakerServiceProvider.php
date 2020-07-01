<?php

namespace Piyush\EntityMaker;

use Illuminate\Support\ServiceProvider;
use Piyush\EntityMaker\Commands\EntityMakeCommand;
use Piyush\EntityMaker\Commands\ServiceMakeCommand;

class EntityMakerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EntityMakeCommand::class,
                ServiceMakeCommand::class,
            ]);
        }
    }

    public function register()
    {
    }
}
