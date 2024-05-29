<?php

namespace TTapi\MidjourneyChecker;


use TTapi\MidjourneyChecker\Src\Parameters\Checker\HandleChecker;

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

        $handleCheck = new HandleChecker();

        return $handleCheck->handle($this->prompt);
    }


}
var_dump((new PromptChecker())->handle('dog --ar 1:1'));