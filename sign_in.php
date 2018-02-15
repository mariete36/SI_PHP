<?php
require 'is_admin.php';
require_once 'init_db.php';
?>


<form action="actions/action_sign_in.php" method="post">
    <input type="text"     name="username" placeholder="Username" autofocus>
    <input type="password" name="password"     placeholder="Password" autofocus>
    <input type="submit">
</form>