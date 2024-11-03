<?php
$beers = [
    [
        "name" => "Erdinger",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ],
    [
        "name" => "Erdinger 2",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ]
];

foreach ($beers as $beer) {
    foreach ($beer as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
}
