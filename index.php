<?php
// CONNECT TO SERVER AND DATABASE
require_once "init_db.php";
// GET DATA
require_once "consult_db.php";
// START SESSION
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

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Note</th>
    </tr>

    <?php

    ?>
</table>


    <form class="add_form" action="actions/ACTION_add.php" method="POST">
        <input type="text"      name='first_name'   placeholder="First name">
        <input type="text"      name='last_name'    placeholder="Last name">
        <input type="text"      name='age'          placeholder="Age">
        <input type="submit">
    </form>
<?php
// SHOW ERROR MESSAGES
require_once "show_error_msg.php";
?>
</body>
</html>