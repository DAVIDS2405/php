<?php

namespace app\interface;

interface ValidatorInterface
{
    public function getError(): string;
    public function validateAdd($data): bool;
    public function validateUpdate($data): bool;
}
