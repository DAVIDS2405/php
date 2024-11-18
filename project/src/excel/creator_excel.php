<?php

namespace app\excel;

use app\interface\ExcelInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CreatorExcel implements ExcelInterface
{
    public function create(array $data, string $filePath)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $headers = ['id', 'name'];
        $sheet->fromArray([$headers], null, 'A1');
        $sheet->fromArray($data, null, 'A2');
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
    }
}
