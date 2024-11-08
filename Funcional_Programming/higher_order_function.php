<?php

$const = 5;


$some = function (float $a, float $b) use ($const): float {
    return $a + $b + $const;
};

//arrow function

$sum = fn($a, $b) => $a + $b;

function show(callable $fn, float $a, float $b)
{
    echo $fn($a, $b);
}

function mul(float $a, float $b): float
{
    return $a * $b;
}


show(fn($a, $b) => $a - $b, 3, 5);
show("mul", 3, 5);
