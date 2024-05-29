<?php

namespace Ttapi\MidjourneyCheker\Paramsters\Checker;

use Ttapi\MidjourneyCheker\Exception\InvalidParamsException;
use Ttapi\MidjourneyCheker\Paramsters\ParamsConfig;

class Aspect extends BaseChecker implements BaseCheckerInterface
{
    public $needs = [
        '--ar', '--aspect'
    ];

    public function __construct(ParamsConfig $paramsConfig, $config = null)
    {
        parent::__construct($paramsConfig, $config);
    }

    /**
     * @throws InvalidParamsException
     */
    public function handle()
    {
        $prompt = $this->prompt;

        $pattern = '\s+(\d+):(\d+)/';

        foreach ($this->needs as $need){
            if(str_contains($prompt, $need)){

                if (preg_match("/--$need".$pattern, $prompt, $matches)) {
                    if (is_numeric($matches[1]) && is_numeric($matches[2])) {
                        $this->paramsConfig->aspect = $need.' '.$matches[1].':'.$matches[2];

                        return $this->paramsConfig;

                    } else {
                        throw new InvalidParamsException("Invalid $need params [$need.' '.$matches[1].':'.$matches[2]]");
                    }
                }

            }
        }

    }


}