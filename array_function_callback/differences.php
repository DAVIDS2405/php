<?php
require "models/people.php";
require "models/functions.php";

use ModelPeople\People;

$people = [new People("Juan", 20), new People("Mario", 20), new People("Maria", 25), new People("Pedro", 30)];
$people2 = [new People("Juan", 20), new People("Pedro", 30), new People("Ana", 31), new People("Luis", 5)];

$differences = array_diff($people, $people2, fn($person1, $person2) => $person1->name <=> $person2->name);
