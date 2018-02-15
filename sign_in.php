<?php
require 'not_admin.php';
?>


<form action="actions/action_sign_in.php" method="post">
    <input type="text"     name="username" placeholder="Username" autofocus>
    <input type="password" name="password"     placeholder="Password" autofocus>
    <input type="submit">
</form>