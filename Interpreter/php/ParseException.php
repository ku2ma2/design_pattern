<?php

namespace Interpreter;

class ParseException extends \Exception
{
    public function __construct(string $msg)
    {
        parent::__construct($msg);
    }
}
