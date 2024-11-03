<?php

$names = ["David", "Karina", "Rafa"];
$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];

foreach ($names as $name) {
    echo $name;
}

foreach ($beer as $k => $v) {
    echo $k . " " . $v . ";";
}
