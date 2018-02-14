<?php
require_once "../init_db.php";

$requete = "INSERT INTO 
`anime` 
(`name`, `genre`, `url`, `year`) 
VALUES
(:name, :genre, :url, :date)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':url', $_POST['url']);
$stmt->bindValue(':date', $_POST['year']);
$stmt->execute();
header('Location: ../admin.php?id='.$conn->lastInsertId());
exit();