<?php
// CONNECT TO SERVER AND DATABASE AND GET DATA
require_once "init_db.php";


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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>

<body>
<a href="index.php">index</a>
<div class="read">
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>genre</th>
            <th>picture</th>
            <th>year</th>

        </tr>

        <?php
        /* on utilise SELECT pour selectionner les noms des données et FROM pour indiquer depuis quelle table.*/
        $sql = "SELECT
            id,
            name,
            genre,
            url,
            year
          FROM
            anime
        ;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        ?>
        <?php
        /* parcourt le tableau donné par fetch et affiche un tr tant qu'il trouve une ligne dans la table. */
        while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <tr>
                <td><?=$row["id"]?></td>
                <td><a href="anime_description.php?id=<?=$row["id"]?>"><?=$row["name"]?></a></td>
                <td><?=$row["genre"]?></td>
                <td><?=$row["url"]?></td>
                <td><?=$row["year"]?></td>
                <td class="modifyLink">
                    <form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?=$row["id"]?>">
                        <input type="submit" value="Modify">
                    </form>
                </td>
                <td class="deleteButton">
                    <form action="actions/action_delete.php" method="POST">
                        <input type="hidden" name="id" value="<?=$row["id"]?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endwhile;?>

    </table>
</div>

<a href="add.php">Add</a>

<?php
// SHOW ERROR MESSAGES
//require_once "show_error_msg.php";
?>


    <div class="read">
        <table>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>password</th>
            </tr>

            <?php
            /* on utilise SELECT pour selectionner les noms des données et FROM pour indiquer depuis quelle table.*/
            $sql_user = "SELECT
                    id,
                    username,
                    password
                  FROM
                    user
                ;";

            $stmt_user = $conn->prepare($sql_user);
            $stmt_user->execute();
            ?>

            <?php
            /**
             * parcours le tableau donné par fetch et affiche un tr tant qu'il trouve une ligne dans la table.
             * */
            while (false !== $row = $stmt_user->fetch(PDO::FETCH_ASSOC)) :?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["password"]?></td>
                    <td>
                        <form action="actions/action_user_delete.php" method="POST">
                            <input type="hidden" name="id" value="<?=$row["id"]?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            <?php endwhile;?>
        </table>
    </div>

    <?php
    // SHOW ERROR MESSAGES
    //require_once "show_error_msg.php";
    ?>
</body>
</html>