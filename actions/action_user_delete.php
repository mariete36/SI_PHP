<?php

require_once "../init_db.php";

$sql = "DELETE FROM
`user`
WHERE
`id` = :id
;";
$stmt_user = $conn->prepare($sql);
$stmt_user->bindValue(':id', $_POST['id']);
$stmt_user->execute();
header('Location: ../admin.php');