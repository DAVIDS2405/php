<?php

if (false) {
    echo "not";
} elseif ($enter == true) {
    echo "enter exist and go in this line";
} else {
    echo "yes";
}

$age = 18;

switch ($age) {
    case 1:
        echo "tiene 1 año";
        break;
    case 18:
        echo "tiene 18";
        break;
}


$value = true ? "true" : "false";
echo $value;


for ($i = 0; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        continue;
    }

    echo $i;
}

$i = 0;

while ($i < 10) {

    $i++;
}


$j = 10;
do {
    echo "entra";
    $i++;
} while ($j < 10);
