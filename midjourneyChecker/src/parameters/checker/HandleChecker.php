<?php

namespace TTapi\MidjourneyChecker\Src\Parameters\Checker;

use TTapi\MidjourneyChecker\Src\Parameters\ParamsConfig;

class HandleChecker
{
    public static $objects;

    protected ParamsConfig $paramsConfig;

    public function __construct()
    {
        self::$objects = [
            Aspect::class
        ];
        $this->paramsConfig = new ParamsConfig();
    }

    /**
     * @param $prompt
     * @return ParamsConfig|null
     * @throws \TTapi\MidjourneyChecker\Exception\InvalidParamsException
     */
    public function handle($prompt)
    {
        foreach (self::$objects as $object){
            /**
             * @var $object Aspect
             */
            $this->paramsConfig = (new $object($this->paramsConfig, $prompt))->handle();
        }

        return $this->paramsConfig;
    }
}