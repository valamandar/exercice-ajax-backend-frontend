<?php

namespace App;


class Database
{

    protected $pdo = null;
    private $DB_NAME = 'entreprise';
    private $DB_HOST = 'localhost:3306';
    private $DB_PASSWORD = '';
    private $DB_USER = 'root';

    public function __construct()
    {
        $this->getPDO();
    }

    private function getPDO()
    {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("mysql:host={$this->DB_HOST};dbname={$this->DB_NAME}", $this->DB_USER, $this->DB_PASSWORD);
        }
    }
}
