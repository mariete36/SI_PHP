
<?php
/**
 * ce fichier fait le lien entre notre code php et la base de donnée
 * $conn = new PDO(dsn: 'database;server', username: 'mysqlusername', password:'mysqlpass');
 */
try {
    $conn = new PDO('mysql:dbname=otakoon;host=localhost', 'root', 'oui');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

