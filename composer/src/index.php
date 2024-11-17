<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$now = Carbon::now();

//echo "la hora actual es " . $now;

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('A2', 'Hector');

$writer = new Xlsx($spreadsheet);
$fileName = 'exceles/myExcel.xlsx';
$writer->save($fileName);

echo "Archivo generado";
