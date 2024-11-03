<?php

trait EmailSender
{
    public function sendEmail()
    {
        echo "Se envía un email <br>";
    }
}

trait DB
{
    public function save()
    {
        echo "Se guarda en la bd <br>";
    }
}

trait Log
{
    public function log(string $message, string $fileName)
    {
        if (!file_exists($fileName)) {
            file_put_contents($fileName, "");
        }


        $current = file_get_contents($fileName);
        $current .= date("d-m-Y H:i:s") . " - " . $message . "\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice
{
    use EmailSender, DB, Log;

    public function create()
    {
        echo "Se crea la factura<br>";
        $this->log("Se creo la factura", "log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->sendEmail();
$invoice->create();
