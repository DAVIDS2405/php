<?php
$beer = [
    "Carolus",
    "London Porter",
    "Delirium Red"
];

$beer2 = [
    "Carolus 2",
    "London Porter 2",
    "Delirium Red 2"
];
$beerMixed = array_merge($beers, $beer2);
print_r($beerMixed);

array_push($beer, "Katmetilen");
array_pop($beer);
echo count($beer);
print_r($beer);


if (in_array("Corona", $beer)) {
    printf("existe");
}
