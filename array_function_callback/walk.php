<?php
require "models/functions.php";


$numbers = [1, 2, 3, 4, 5];

array_walk($numbers, fn(&$num) => $num *= 2);
