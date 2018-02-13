<?php
if (!isset($_POST['username']) || !isset($_POST['pass'])) {
    header('Location: ../index.php?nopostdata');
    exit;
}
require_once "../init_db.php";
$requete_user = "INSERT INTO
`users`
(`username`, `password`)
VALUES
(:username, :pass)
;";
$stmt_user = $conn->prepare($requete_user);
$stmt_user->bindValue(':username', $_POST['username']);
$stmt_user->bindValue(':pass', $_POST['pass']);
$stmt_user->execute();
header('Location: ../index.php?id='.$conn->lastInsertId());