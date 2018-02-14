<?php
// CONNECT TO SERVER AND DATABASE AND GET DATA
require_once "not_admin.php";
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
    <a href="index.php">index</a>
    
    <form action="actions/action_sign_in.php" method="post">
        <input type="text"     name="username"      placeholder="Username">
        <input type="password" name="password"     placeholder="Password">
        <input type="submit">
    </form>
</body>
</html>