<?php

namespace app\interface;

interface RepositoryInterface
{
    public function create($data);
    public function get(): array;
    public function update($data);
    public function delete(int $id);
    public function exists(int $id): bool;
}
