<?php
/* all */
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'])!=='yes') {
    header('Location: ../index.php?error=not permitted');
    exit;
}