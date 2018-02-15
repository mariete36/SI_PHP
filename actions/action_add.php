<?php
require_once "../init_db.php";

$requete = "INSERT INTO 
`anime` 
(`name`, `genre`, `url`, `year`) 
VALUES
(:name, :genre, :url ,:year)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':url', pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION));
$stmt->bindValue(':year', $_POST['year']);
$stmt->execute();


$target_dir = "../uploads/";
$target_file = $target_dir . $conn->lastInsertId() . "." . pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk === 1) {
    $success=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "./".$target_file);
}

header('Location: ../admin.php?id='.$conn->lastInsertId());
exit();?>
