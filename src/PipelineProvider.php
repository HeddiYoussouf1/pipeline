<?php
namespace Heddiyoussouf\Pipeline;

use Illuminate\Support\ServiceProvider;

class PipelineProvider extends ServiceProvider
{
    public function boot(){

        $this->app->singleton('Pipeline', function ($app) {
            return new \Heddiyoussouf\Pipeline\Pipeline();
        });
        $this->registerCommands();
        $this->registerStubs();



    }




    /**
     * Get the Press route group configuration array.
     *
     * @return array
     */
    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Heddiyoussouf\Pipeline\Commands\MakeStep::class,
            ]);
        }
    }
    private function registerStubs(){
        $this->publishes([
            __DIR__ . '/stubs' => base_path('stubs/'),
        ], 'stubs');
    }


}
