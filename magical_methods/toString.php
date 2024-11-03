<?php

class Car
{
    private string $model;
    private string $brand;
    private int $year;


    public function __construct(string $model, string $brand, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function __toString()
    {
        return "El carro es modelo $this->model de la marca $this->brand";
    }
}

$car = new Car("HVR", "honda", 2024);
$info = (string) $car;

echo gettype($info);
echo $info;
