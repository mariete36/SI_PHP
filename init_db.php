
<?php
/* ça fonctionne merci ! */
try {
    $conn = new PDO('mysql:dbname=oeuvre;host=localhost', 'root', 'oui');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

