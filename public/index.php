<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fouadlamnaouar\TP_SQL_PHP_MySQL\Entity\ProductLine;
use Fouadlamnaouar\TP_SQL_PHP_MySQL\DBAL\Connector;

//initialisation de la connextion
//creation d'une instance de la class Connector 
$dbConnector = new Connector();
$dbh = $dbConnector->getConnection();

//creation d'une instance de la class ProductLine
$ppl1 = new ProductLine($dbh);

//recupere des lignes du produits
$productLines = $ppl1->getProductLines();

//afficher l'objet productLines
var_dump($productLines);  
echo $productLines;


require_once __DIR__ . '/../templates/base.html.php';
?>