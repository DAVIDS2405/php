<?php

class Engine
{
    private $fileName;
    public function __construct($fileName)
    {
        $this->$fileName = $fileName;
    }
    public function __call($name, $arguments)
    {
        echo "Llamando al método '$name' " . "con los argumentos " . implode(', ', $arguments) . "\n";

        $message = $name . ": ";
        $message .= $arguments[0] . ' - ';
        $message .= date("m-d-Y H:i:s") . "\n";

        if (!file_exists($this->fileName)) {
            file_put_contents($this->fileName, "");
        }

        file_put_contents($this->fileName, $message, FILE_APPEND);
    }

    public function __callStatic($name, $arguments)
    {
        echo "Llamando al método '$name' " . "con los argumentos " . implode(', ', $arguments) . "\n";
    }
}

$engine = new Engine("log.txt");
$engine->run("name", "some", true);
$engine->error("Un error ha ocurrido");
$engine->log("El usuario ha echo lo siguiente");
Engine::some();
