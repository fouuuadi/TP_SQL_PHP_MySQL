<?php
namespace Fouadlamnaouar\CourPhp\Entity;

class ProductLine 

{

    public string $productLine;

    public function __construct(string $name)
    {
        $this->productLine = $name;
    }

    public function f(int $y): int 
    {
        return $y;
    }

}




?>