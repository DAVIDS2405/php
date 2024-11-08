<?php

//keep the state

function add(float $number)
{
    return function ($number2) use ($number) {
        return $number + $number2;
    };
}


function hi()
{
    $count = 0;

    return function () use (&$count) {
        $count++;
        return "Hola $count";
    };
}

$s1 = add(10);
echo $s1(20);


$h1 = hi();
echo $h1;
echo $h1;
echo $h1;
