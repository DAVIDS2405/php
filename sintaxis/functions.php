<?php

function hi(string $name)
{
    return "Hi $name";
}

function add(int $a, int $b): int
{
    $result = $a + $b;
    return $result;
}
