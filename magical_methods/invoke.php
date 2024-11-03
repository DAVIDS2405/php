<?php
class Add
{
    public function __invoke($a, $b)
    {
        return $a + $b;
    }
}

class Validator
{
    private $min;
    private $max;
    public $error;


    public function __construct(int $min, int $max)
    {

        $this->max = $max;
        $this->min = $min;
    }
    public function __invoke($text)
    {
        $long = strlen($text);
        if ($long < $this->min || $long > $this->max) {
            $this->error = "El texto es muy pequeño";
            return false;
        }

        return true;
    }
}

$add = new Add();

$val = new Validator(1, 20);

if ($val("asdasdasd")) {
    echo "valido";
} else {
    $val->error;
}
