<?php

namespace app\data;

use PDO;

use app\interface\DataInterface;
use app\data\BaseData;


class BeerData extends BaseData implements DataInterface
{
    const TABLE = 'beer';

    public function get(): array
    {
        $sql = 'select id,name from ' . self::TABLE;
        $con = $this->pdo->prepare($sql);
        $con->execute();
        $data = $con->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
