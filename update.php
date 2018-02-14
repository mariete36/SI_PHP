<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 14/02/2018
 * Time: 09:38
 */

require_once "init_db.php";


if (!isset($_POST['id'])) {
    header('Location:index.php');
    exit();
}

$sql = "SELECT
name,
genre,
picture,
synopsis,
date
FROM
anime
WHERE
id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if (!isset($row['name'])) {
header('Location:index.php?error');
exit();
}
?>

<a href="index.php">index</a>

<div class="update">
<p>Modify</p>

    <form action="actions/action_modify.php" method="POST">
        <input type="hidden"    name='id'           placeholder="id"        value="<?=$_POST["id"]?>">
        <input type="text"      name='name'         placeholder="name"      value="<?=$row["name"]?>">
        <input type="text"      name='genre'        placeholder="genre"     value="<?=$row["genre"]?>">
        <input type="text"      name='url'          placeholder="url"       value="<?=$row["picture"]?>">
        <input type="text"      name='date'         placeholder="date"      value="<?=$row["date"]?>">
        <input type="submit">
    </form>
</div>