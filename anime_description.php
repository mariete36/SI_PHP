<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 13/02/2018
 * Time: 18:11
 */

require_once "init_db.php";

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

if (!isset($_GET['id'])) {
    header('Location:index.php');
    exit();
}

$sql = "SELECT
    name,
    genre,
    url,
    year,
    synopsis
  FROM
    anime
  WHERE
    id = :id  
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

//if (!isset($row['name'])) {
//    header('Location:index.php?error');
//    exit();
//}
?>
<a href="admin.php">admin</a>
<h1><?=$row["name"]?></h1>

<p><?=$row["synopsis"]?></p>

</body>
</html>
