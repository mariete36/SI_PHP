<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 14/02/2018
 * Time: 09:35
 */

?>

<a href="index.php">Index</a>

<div class="create">
    <p>Add</p>

    <form class="add_form" action="actions/ACTION_add.php" method="POST">
        <input type="text"      name='name'         placeholder="name">
        <input type="text"      name='genre'        placeholder="genre">
        <input type="text"      name='picture'      placeholder="url">
        <input type="text"      name='date'         placeholder="date">
        <input type="submit">
    </form>
</div>