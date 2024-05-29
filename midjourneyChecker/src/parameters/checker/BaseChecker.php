<?php

namespace Ttapi\MidjourneyCheker\Paramsters\Checker;

use Ttapi\MidjourneyCheker\Paramsters\ParamsConfig;

class BaseChecker
{
//    protected $version;

    protected $prompt;

//    protected $mode;

    protected ParamsConfig $paramsConfig;

    public function __construct(ParamsConfig $paramsConfig, $prompt = null)
    {
        $this->paramsConfig = $paramsConfig;

        if(!is_null($prompt)){
            $this->prompt = $prompt;
        }
//        if(is_array($config)){
//
//            $classVars = array_keys(get_class_vars(get_class(new BaseChecker())));
//
//            foreach ($config as $k => $v){
//                if(in_array($k, $classVars)){
//                    $this->$k = $v;
//                }
//            }
//        }
    }

//    public function setVersion($version)
//    {
//        $this->version = $version;
//        return $this;
//    }

    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
        return $this;
    }

//    public function setMode($mode)
//    {
//        $this->mode = $mode;
//        return $this;
//    }

}