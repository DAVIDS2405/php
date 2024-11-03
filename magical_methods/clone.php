<?php


class A
{
    public string $label;
}
class Some
{
    public string $name;
    public A $a; // esto no se clona objetos en objetos no hay clonación

    public function __clone()
    {
        $this->name = strtoupper($this->name);
        $this->a = clone $this->a; // clonación a profundidad;
    }
}

function change(Some $some)
{
    $some->name = 'Ya no tiene algo, se ha cambiado su valor';
}


$some = new Some();
$some->name = "Algo";

$some2 = $some;

$some2->name = "lo cambio";
echo $some2->name . "<br>";
echo $some->name . "<br>";

$newSome = clone $some;

$newSome->name = "Lo cambio el clonado <br>";
echo $some->name;

echo $newSome->name;

// $array1 = [1,2,3];
// $array2 = $array1;
// $array2[] = 10;
