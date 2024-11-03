<?php

$beer = new stdClass();

$beer->name = "Erdinger";
$beer->alcohol = 8.5;


$beer->name = "Erdinger Pikantus";
echo $beer->name;


$arr = (array) $beer;
echo $arr["name"];


$arrLocation = [
    "address" => "Calle 1",
    "country" => "Mexico"
];

$objLocation = (object) $arrLocation;

echo $objLocation->address;
