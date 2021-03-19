<?php
require_once '../app.php';

Auth::guest();
User::register();
?>

<form action="/register.php" method="POST">
    <label>Username:<input type="text" name="username"></label>
    <label>Password:<input type="password" name="password"></label>
    <label>Confirm Password:<input type="password" name="password_confirmation"></label>
    <?= Auth::csrf_field() ?>
    <input type="submit" value="Register">
    or
    <a href="/login.php">Login</a>
</form>
