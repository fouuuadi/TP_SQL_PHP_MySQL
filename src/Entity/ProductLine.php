<?php
namespace Fouadlamnaouar\TP_SQL_PHP_MySQL\Entity;

class ProductLine 

{
    
    private \PDO $connector;

    // public function __construct(string $name)
    public function __construct(\PDO $connector)
    {
        $this->connector = $connector;
    }

    // public function f(int $y): int 
    // {
    //     return $y;
    // }

    public function getProductLines(): array
    {
        $sql ="SELECT * FROM productLines";
        $statement = $this->connector->prepare($sql);
        $result = $statement->execute([]);

        return $statement-> fetchALL(\PDO::FETCH_ASSOC);
    }

}




?>