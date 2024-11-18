<?php

namespace app\interface;

interface ExcelInterface
{
    public function create(array $data, string $filePath);
}
