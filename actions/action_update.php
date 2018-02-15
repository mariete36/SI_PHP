<?php

require_once "../init_db.php";
// selectionne ine ligne de la table pour en modifier le nom le genre et l'année


$sql = "UPDATE
      `anime`
SET
   `name` = :name,
   `genre` = :genre,
<<<<<<< HEAD
<<<<<<< HEAD:actions/action_modify.php
   `picture` = :picture,
   `date` = :date
=======
   `year` = :year
>>>>>>> 679f6910e0da52fddc2e1ff6391e36267e12d25f:actions/action_update.php
=======
   `year` = :year,
   `episode` = :episode,
   `synopsis` = :synopsis
>>>>>>> 5bda5045f0dc4a0140fb11d8c10885b4d8493c5f
WHERE
   id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':year', $_POST['year']);
$stmt->bindValue(':episode', $_POST['episode']);
$stmt->bindValue(':synopsis', $_POST['synopsis']);
$stmt->execute();

header('Location: ../admin.php?id='.$conn->lastInsertId());
