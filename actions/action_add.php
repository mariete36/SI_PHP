<?php

if (!isset($_POST['name'])) {
    header('Location: ../index.php?nopostdata');
    exit;
}

require_once "../init_db.php";

$requete = "INSERT INTO 
`anime` 
(`name`, `genre`, `picture`, `date`) 
VALUES
(:name, :genre, :picture, :date)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':picture', $_POST['picture']);
$stmt->bindValue(':date', $_POST['date']);
$stmt->execute();
header('Location: ../index.php?id='.$conn->lastInsertId());