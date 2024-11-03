<?php


class Beer
{
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;


    public function __construct($name, $brand, $alcohol, $isStrong)
    {

        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }
}

$beer = new Beer("Delirium Red", "Delirium", 8.5, true);

$json = json_encode($beer);

$arrAs = json_decode($json, true);
echo $arrAs["name"];
echo $json;
