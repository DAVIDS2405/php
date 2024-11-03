<?php

class Animal
{
    public string $name;
    public int $age;
    public string $color;

    public function __sleep()
    {
        return ["name", "color"];
    }
    public function __wakeup()
    {
        echo "se deserializo el objeto<br>";
        $this->age = 0;
        $this->some();
    }

    public function some()
    {
        echo "el color es: " . $this->color . "<br>";
    }
}

$duck = new Animal();
$duck->name = "pato";
$duck->age = 2;
$duck->color = "rojo";


$s = serialize($duck);

echo $s . "<br>";

$obj = unserialize($s);
print_r($obj);
