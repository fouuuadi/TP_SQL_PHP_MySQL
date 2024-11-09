<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fouadlamnaouar\CourPhp\Entity\ProductLine;
use Fouadlamnaouar\CourPhp\DBAL\Connector;



$ppl1 = new ProductLine('TOTO');
$title = $ppl1->productLine;  
var_dump($title);  
echo $title;

$dbh = new Connector();
var_dump($dbh);

require_once __DIR__ . '/../templates/base.html.php';
?>