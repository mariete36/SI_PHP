<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 14/02/2018
 * Time: 09:35
 */
session_start();
?>

<a href="admin.php">Index</a>

<div class="create">
    <p>Add</p>

    <form class="add_form" action="actions/action_add.php" enctype="multipart/form-data" method="post">
        <input type="text"      name='name'         placeholder="name">
        <input type="text"      name='genre'        placeholder="genre">
        <input type="file"      name="fileToUpload">
        <input type="number"      name='year'         placeholder="year">
        <input type="number"      name='episode'         placeholder="episode">
        <input type="text" name="synopsis" placeholder="synopsis">

        <input type="submit">
    </form>
</div>
