<?php
require_once "../init_db.php";

$sql = "UPDATE
      `anime`
SET
   `name` = :name,
   `genre` = :genre,
   `picture` = :picture,
   `date` = :date
WHERE
   `id` = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':picture', $_POST['picture']);
$stmt->bindValue(':date', $_POST['date']);
$stmt->execute();
header('Location: ../index.php?id='.$conn->lastInsertId());