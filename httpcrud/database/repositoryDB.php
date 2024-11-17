<?php

namespace app\database;

use PDO;
use app\database\BaseRepository;
use app\interface\RepositoryInterface;

class RepositoryDB extends BaseRepository implements RepositoryInterface
{
    const TABLE = 'beer';
    public function get(): array
    {
        $sql = "select * from " . self::TABLE;
        $com = $this->pdo->prepare($sql);
        $com->execute();
        $data = $com->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function update($data)
    {
        $sql = "update " . self::TABLE . " set name = :name, alcohol = :alcohol, id_brand = :id_brand" . " where id = :id";
        $com = $this->pdo->prepare($sql);
        $com->execute($data);
        return [];
    }
    public function delete(int $id)
    {
        $sql = "delete from " . self::TABLE . " where id = :id";
        $com = $this->pdo->prepare($sql);
        $com->execute(["id" => $id]);

        return [];
    }
    public function exists(int $id): bool
    {
        $sql = 'select * from ' . self::TABLE . " where id = :id";
        $com = $this->pdo->prepare($sql);
        $com->execute(['id' => $id]);
        $result = $com->rowCount() > 0;
        return $result;
    }
    public function create($data)
    {
        $sql = 'insert into ' . self::TABLE . " (name,alcohol,id_brand) " . "values (:name,:alcohol,:id_brand)";
        $com = $this->pdo->prepare($sql);
        $com->execute($data);

        return [];
    }
}
