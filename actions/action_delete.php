<?php
require_once "../init_db.php";
$sql = "DELETE FROM
`anime`
WHERE
`id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: ../index.php');


$sql = "DELETE FROM
`users`
WHERE
`id` = :id
;";
$stmt_user = $conn->prepare($sql);
$stmt_user->bindValue(':id', $_POST['id']);
$stmt_user->execute();
header('Location: ../index.php');