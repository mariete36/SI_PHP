<?php
/**
 * la page update selectionne une ligne dont on pourra modifier le nom, le genre, l'url, et l'année.
 */
session_start();
require_once "init_db.php";

if (!isset($_POST['id'])) {
    header('Location:index.php');
    exit();
}

$sql = "SELECT
name,
genre,
url,
year

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
    echo $row["name"];
    header('Location:index.php?error');
exit();
}
?>

<a href="index.php">index</a>

<div class="update">
<p>Modify</p>

    <form action="actions/action_update.php" method="POST">
        <input type="hidden"    name='id'           placeholder="id"        value="<?=$_POST["id"]?>">
        <input type="text"      name='name'         placeholder="name"      value="<?=$row["name"]?>">
        <input type="text"      name='genre'        placeholder="genre"     value="<?=$row["genre"]?>">
        <input type="text"      name='year'         placeholder="year"      value="<?=$row["year"]?>">
        <input type="submit">
    </form>
</div>
