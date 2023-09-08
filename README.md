# Heddiyoussouf's Pipeline Package

The heddiyoussouf/pipeline package provides a simplified way to utilize Laravel's pipeline mechanism and introduces a command to rapidly generate "step" classes. It extends Laravel's pipeline functionality, allowing users to pass data through various transformations (steps) more efficiently.
Features:

    A make:step artisan command to quickly generate step classes.
    A facade to easily interact with the pipeline.
    Ability to apply a sequence of steps to a given input and get a final result.
    Publishable stubs to further customize the generated step classes.

## Installation

  **Require the package:**

  You can include the package in your Laravel project with the following command:

    bash

    composer require heddiyoussouf/pipeline

**Service Provider:**

Laravel will automatically register the service provider. If you're on an older version of Laravel or have disabled package discovery, add the provider manually in config/app.php:

    php

    'providers' => [
        // ...
        Heddiyoussouf\Pipeline\PipelineProvider::class,
    ],

## Usage:

**Generate a Step:**

After installation, you can use the provided artisan command to generate step classes:

    bash

    php artisan make:step YourStepName

This will create a new step class inside the App\Steps directory.

**Using the Pipeline:**

You can easily utilize the provided pipeline with the facade:

    php

    use Heddiyoussouf\Pipeline\Facades\Pipeline;

    $result = Pipeline::apply($initialValue, [YourStep1::class, YourStep2::class]);

**Publishing PipelineProvider:**

    bash
    
    php artisan vendor:publish --provider="Heddiyoussouf\Pipeline\PipelineProvider"

Once published, you can find the stubs in your project's root stubs directory.
