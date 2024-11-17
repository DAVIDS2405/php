<?php

namespace app\business;

use app\exceptions\ValidationException;
use app\interface\RepositoryInterface;
use app\interface\ValidatorInterface;


class Create
{
    private RepositoryInterface $repository;
    private ValidatorInterface $validator;

    public function __construct(RepositoryInterface $repository, ValidatorInterface $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function add($data)
    {
        if (!$this->validator->validateAdd($data)) {
            throw new ValidationException($this->validator->getError());
        }
        $this->repository->create($data);
    }
}
