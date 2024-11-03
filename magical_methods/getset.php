<?php



class Person
{
    public int $id;
    public string $name;

    public function __get($name)
    {
        echo "No existe $name en el objeto";
    }
    public function __set($name, $value)
    {
        echo "No puedes agregar $value a $name";
    }
}

$person = new Person();
$person->name = "juan";
echo $person->name;
echo $person->country;

$person->address = "Calle 1";
echo $person->address;
