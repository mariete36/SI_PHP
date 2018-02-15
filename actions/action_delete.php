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
header('Location: ../admin.php');