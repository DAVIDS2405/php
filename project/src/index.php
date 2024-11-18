<?php
require __DIR__ . '/../vendor/autoload.php';

use app\interface\ExcelInterface;
use app\interface\DataInterface;

use app\business\GeneratorExcel;
use app\data\BeerData;
use app\excel\CreatorExcel;



$now = date('d-m-Y');

$filePath = __DIR__ . '/files/beer-' . $now . '.xlsx';
$repository = new BeerData();

$excel = new CreatorExcel();
$generator = new GeneratorExcel($repository, $excel);

$generator->generate($filePath);

echo "Archivo creado con éxito";
