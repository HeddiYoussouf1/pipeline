<?php
namespace Heddiyoussouf\Pipeline;

use Illuminate\Pipeline\Pipeline as Workflow;

class Pipeline {
    public function apply($input,array $steps){
            return app(Workflow::class)
            ->send($input)
            ->through($steps)
            ->thenReturn();
    }
}
