<?php

namespace app\business;

use app\exceptions\DataException;
use app\interface\RepositoryInterface;



class Delete
{
    private RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id)
    {

        if (!$this->repository->exists($id)) {
            throw new DataException('No existe el dato a actualizar');
        }

        $this->repository->delete($id);
    }
}
