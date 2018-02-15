<?php

require_once "../init_db.php";



$sql = "UPDATE
      `anime`
SET
   `name` = :name,
   `genre` = :genre,
<<<<<<< HEAD:actions/action_modify.php
   `picture` = :picture,
   `date` = :date
=======
   `year` = :year
>>>>>>> 679f6910e0da52fddc2e1ff6391e36267e12d25f:actions/action_update.php
WHERE
   id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':year', $_POST['year']);
$stmt->execute();

header('Location: ../admin.php?id='.$conn->lastInsertId());
