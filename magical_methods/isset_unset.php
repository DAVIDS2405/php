<?php

$a = 1;

unset($a);

if (isset($a)) {
    echo "existe";
} else {
    echo "no existe";
}


$wine = new $Wine();

if (isset($wine->name)) {
    echo "existe<br>";
} else {
    echo "no existe<br>";
}

unset($wine->style);

class Wine
{
    public $style;

    private $data = [
        "name" => "vinos"
    ];

    public function __isset($name)
    {
        echo "Se comprueba la existencia de $name <br>";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "se intento eliminar la propiedad $name <br>";
    }
}
