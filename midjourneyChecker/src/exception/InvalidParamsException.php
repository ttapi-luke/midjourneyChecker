<?php

namespace TTapi\MidjourneyChecker\Src\Exception;

class InvalidParamsException extends \Exception
{
    public function __construct(string $message = "", int $code = 401, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}