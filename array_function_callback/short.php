<?php
require "models/people.php";
require "models/functions.php";

use ModelPeople\People;

$people = [new People("Juan", 20), new People("Pedro", 30), new People("Maria", 25)];

// echo (1<=>2);
// echo (1<=>1);
// echo (2<=>1);

usort($people, fn($person1, $person2) => $person1->age <=> $person2->age);
show($people);
