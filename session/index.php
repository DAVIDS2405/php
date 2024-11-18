<?php

session_start();

if (isset($_SESSION['name'])) {
    echo "Hola" . $_SESSION['name'];
}

$_SESSION['name'] = 'David';
