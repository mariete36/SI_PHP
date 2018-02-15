<?php
//session_start();
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header('Location: ../index.php?nopostdata');
    exit;
}
require_once "../init_db.php";
$requete_user = "INSERT INTO
`user`
(`username`, `password`)
VALUES
(:username, :password)
;";
$stmt_user = $conn->prepare($requete_user);
$stmt_user->bindValue(':username', $_POST['username']);
$stmt_user->bindValue(':password', $_POST['password']);
$stmt_user->execute();
header('Location: ../index.php?id='.$conn->lastInsertId());