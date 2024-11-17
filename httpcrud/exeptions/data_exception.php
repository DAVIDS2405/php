<?php

namespace app\exceptions;

use Exception;

class DataException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
