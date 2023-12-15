<?php

namespace App\Services;

class SupportService{

    protected $repository;

    public function __construct(){

    }

    public function getAll(string $filter = null) : array{

        return $this->repository->getAll($filter);

    }

    public function findOne(string $id) : stdClass|null{

        return $this->repository->findOne($id);

    }

    public function new(
        string $subject,
        string $status,
        string $body,
        ): stdClass{
            $this->repository->new(
                $subject,
                $status,
                $body,
            );
    }

    public function update(
        string $id,
        string $subject,
        string $status,
        string $body,
        ): stdClass|null{
            $this->repository->new(
                $id,
                $subject,
                $status,
                $body,
            );
    }

    public function delete(): void{
        $this->repository->delete($id);
    }

}