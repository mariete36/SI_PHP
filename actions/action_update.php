<?php

require_once "../init_db.php";

$sql = "UPDATE
      `anime`
SET
   `name` = :name,
   `genre` = :genre,
   `url` = :url,
   `year` = :year
WHERE
   id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':url', $_POST['url']);
$stmt->bindValue(':year', $_POST['year']);
$stmt->execute();
header('Location: ../admin.php?id='.$conn->lastInsertId());