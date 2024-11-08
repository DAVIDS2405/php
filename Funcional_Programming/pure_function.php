<?php

class Counter
{
    public int $count = 0;
}

function show(Counter $counter): string
{
    $counter->count++;
    return $counter->count . "<br>";
}

function add(float $a, float $b): float
{
    return $a + $b;
}

$counter = new Counter();

echo add(1, 3);
echo show($counter);
