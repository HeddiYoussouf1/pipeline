<?php

namespace Heddiyoussouf\Pipeline\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class MakeStep extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:step {name}';
    protected $description = 'Create a new step';

    public function handle()
    {
        $name = $this->argument('name');
        $stub = File::get(base_path('stubs/step.stub'));

        if (!File::exists($path = app_path('Steps'))) {
            File::makeDirectory($path, 0777, true);
        }

        $content = str_replace('DummyStep', "{$name}Step", $stub);
        File::put(app_path("Steps/{$name}Step.php"), $content);

        $this->info('Step created successfully.');
    }
}
