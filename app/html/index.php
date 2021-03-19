<?php
require_once '../app.php';

Auth::user();
?>

<h1><?= $user->name ?> todos</h1>

<form action="/logout.php" method="POST">
    <?= Auth::csrf_field() ?>
    <input type="submit" value="Logout">
</form>
