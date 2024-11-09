<?php
require "models/people.php";
require "models/functions.php";

use ModelPeople\People;

$people = [new People("Juan", 20), new People("Pedro", 30), new People("Maria", 25)];
$names = array_map(fn($person) => $person->name, $people);

show($names);

$namesWithFormat = array_map(fn($person) => "<b>" . $person->name . "</b>", $people);

show($namesWithFormat);


$namesWithNumber = array_map(fn($person, $index) => ($index + 1) . "-" . $person->name, $people, array_keys($people));

show($namesWithNumber);
