<?php
namespace Fouadlamnaouar\CourPhp\DBAL;


class Connector 
{
    const DSN = "mysql:dbname=classicmodels;host=localhost:8889";


    public \PDO $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO(self::DSN, 'root', 'root');
    }
}

?>