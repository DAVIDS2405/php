<?php

namespace app\database;


use PDOException;
use PDO;


abstract class BaseRepository
{

    protected $pdo;

    public function __construct()
    {
        $dsn = "pgsql:host=" . DB_HOST . ";port=5432" . ";dbname=" . DB_NAME;
        $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
