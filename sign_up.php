<?
//require 'is_admin.php';
// CONNECT TO SERVER AND DATABASE AND GET DATA
require_once "init_db.php";
?>

<form action="actions/action_sign_up.php" method="post">
    <input type="text"     name="username" placeholder="Username">
    <input type="password" name="password"     placeholder="Password">
    <input type="submit">
</form>
