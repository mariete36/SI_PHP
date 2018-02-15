<?php
/**
 * formulaire add
 */

?>

<a href="admin.php">Index</a>

<div class="create">
    <p>Add</p>

    <form class="add_form" action="actions/action_add.php" enctype="multipart/form-data" method="post">
        <input type="text"      name='name'         placeholder="name">
        <input type="text"      name='genre'        placeholder="genre">
        <input type="file"      name="fileToUpload">
        <input type="text"      name='year'         placeholder="year">
        <input type="submit">
    </form>
</div>