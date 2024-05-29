<?php

namespace Ttapi\MidjourneyCheker;


use Ttapi\MidjourneyCheker\Paramsters\Checker\HandleChecker;

class PromptChecker{

    public $prompt;

    public function __construct($prompt = null)
    {
        $this->prompt = $prompt;
    }

    public function handle($prompt = null)
    {
        if(!is_null($prompt)){
            $this->prompt = $prompt;
        }

        return (new HandleChecker())->handle($this->prompt);
    }


}
