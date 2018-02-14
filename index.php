<?php
require_once 'init_db.php';
session_start();
$sql = "SELECT
id,
username,
password
FROM
users
;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['admin'] = $row["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTAKOON</title>
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <div><a href="sign_up.php">sign_up INSCRIPTION</a></div>
    <div><a href="sign_in.php">sign_in CONNEXION</a></div>
    <div><a href="admin.php">admin_panel</a></div>

    <p>
        Bonjour visiteur, vous avez vu cette page <?php echo $_SESSION['admin'];?> fois.
    </p>
    <div><a href="#">logout</a></div>

<?php
// SHOW ERROR MESSAGES
//require_once "show_error_msg.php";
?>

</body>
</html>




<?php

?>
<table>
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["nom"]?></td>
            <td><?=$row["type"]?></td>
        </tr>
    <?php endwhile;?>
</table>