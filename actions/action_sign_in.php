<?php
require_once "init_db.php";
$requete = "SELECT 
  `password`
FROM 
  `Admin`
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
$admin = $stmt->fetch(PDO::FETCH_ASSOC);
if (!isset($_POST['password']) || ($_POST['password'])!==$admin['password']) {
    header('Location: ../index.php?error=nop');
    exit;
} else {
    session_start();
    $_SESSION['admin'] = 'yes';
    header('Location: index.php?message=Welcome');
    exit;
}