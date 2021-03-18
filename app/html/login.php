<?php
require_once '../app.php';

Auth::guest();
User::login();
?>

<form action="/login.php" method="POST">
    <label>Username:<input type="text" name="username"></label>
    <label>Password:<input type="password" name="password"></label>
    <?= Auth::csrf_field() ?>
    <input type="submit" value="Login">
</form>
