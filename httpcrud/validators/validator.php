<?php

namespace app\validators;

use app\interface\ValidatorInterface;

class Validator implements ValidatorInterface
{
    private string $error;

    public function getError(): string
    {
        return $this->error;
    }

    public function validateAdd($data): bool
    {
        if (empty($data['name'])) {
            $this->error = 'Nombre es obligatorio';
            return false;
        }
        return true;
    }
    public function validateUpdate($data): bool
    {
        if (empty($data['id'])) {
            $this->error = 'Id es obligatorio';
            return false;
        }
        if (empty($data['name'])) {
            $this->error = 'Nombre es obligatorio';
            return false;
        }
        return true;
    }
}
