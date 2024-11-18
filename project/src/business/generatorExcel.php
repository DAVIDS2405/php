<?php

namespace app\business;


use app\interface\DataInterface;
use app\interface\ExcelInterface;

class GeneratorExcel
{
    private DataInterface $repository;
    private ExcelInterface $excel;

    public function __construct(DataInterface $repository, ExcelInterface $excel)
    {
        $this->repository = $repository;
        $this->excel = $excel;
    }

    public function generate(string $filePath)
    {
        $data = $this->repository->get();

        $this->excel->create($data, $filePath);
    }
}
