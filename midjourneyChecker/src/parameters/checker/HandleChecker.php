<?php

namespace Ttapi\MidjourneyCheker\Paramsters\Checker;

use Ttapi\MidjourneyCheker\Paramsters\ParamsConfig;

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
     * @throws \Ttapi\MidjourneyCheker\Exception\InvalidParamsException
     */
    public function handle($prompt)
    {
        foreach (self::$objects as $object){
            /**
             * @var $object \Ttapi\MidjourneyCheker\Paramsters\Checker\Aspect
             */
            $this->paramsConfig = (new $object($this->paramsConfig, $prompt))->handle();
        }

        return $this->paramsConfig;
    }
}