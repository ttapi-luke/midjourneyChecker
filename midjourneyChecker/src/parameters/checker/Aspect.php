<?php

namespace TTapi\MidjourneyChecker\Src\Parameters\Checker;

use TTapi\MidjourneyChecker\Src\Exception\InvalidParamsException;
use TTapi\MidjourneyChecker\Src\Parameters\ParamsConfig;

class Aspect extends BaseChecker implements BaseCheckerInterface
{

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

        if (preg_match('/(--ar|--aspect)/', $prompt, $matcher)) {

            if (preg_match('/(--ar|--aspect)\s+(\d+:\d+)/', $prompt, $matches)) {

                $this->paramsConfig->aspect = $matches[0];

            }else{
                throw new InvalidParamsException("Invalid params [".substr($prompt, strpos($prompt, $matcher[0]))."]");
            }

        }

        return $this->paramsConfig;

    }


}