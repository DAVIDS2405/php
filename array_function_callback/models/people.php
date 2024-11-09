<?php

namespace ModelPeople;

class People
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->age = $age;
        $this->name = $name;
    }
}
