<?php
namespace Fouadlamnaouar\TP_SQL_PHP_MySQL\DBAL;

use Dotenv\Dotenv;

require_once __DIR__ . '/../../vendor/autoload.php';

// chargement des variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../config');
$dotenv->load();


class Connector 
{
    private \PDO $dbh;

    public function __construct()
    {
        // on recupere les valeurs des variables d'environnement qu'on declarer dans le fichier .env
        $dbConnection = $_ENV['DB_CONNECTION'];
        $dbHost = $_ENV['DB_HOST'];
        $dbPort = $_ENV['DB_PORT'];
        $dbName = $_ENV['DB_NAME'];
        $dbUser = $_ENV['DB_USER'];
        $dbPass = $_ENV['DB_PASS'];

        $DSN = "$dbConnection:dbname=$dbName;host=$dbHost:$dbPort";

        try {
            // Initialiser la connexion PDO
            $this->dbh = new \PDO($DSN, $dbUser, $dbPass);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // gere l'erreur
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    // Méthode pour récupérer la connexion
    public function getConnection(): \PDO
    {
        return $this->dbh;
    }
}
?>
