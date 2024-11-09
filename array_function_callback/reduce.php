<?php
require "models/people.php";
require "models/functions.php";

use ModelPeople\People;

$people = [new People("Juan", 20), new People("Pedro", 30), new People("Maria", 25)];


$sum = array_reduce($people, fn($current, $person) => $current + $person->age, 0);

echo $sum;

$namesPipe = array_reduce($people, fn($current, $person) => $current . $person->name . "|", "");

$contentHTML = array_reduce($people, fn($current, $person) => $current . "<li>" . $person->name . "</li>", "<ul>");

$contentHTML .= "</ul>";

echo $contentHTML;
