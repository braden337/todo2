<?php
require_once '../app.php';

Auth::user();
Todo::add();

$todos = Todo::all();
?>

<a href="/"><h1><?= User::current()->name ?> todos</h1></a>

<form action="/logout.php" method="POST">
    <?= Auth::csrf_field() ?>
    <input type="submit" value="Logout">
</form>

<form action="/" method="POST">
    <input type="text" name="description">
    <input type="date" name="date" value="<?= date('Y-m-d');?>">
    <input type="time" name="time" value="<?= date('12:00:00');?>">
    <?= Auth::csrf_field() ?>
    <input type="submit" value="Add Task">
</form>

<ul>
<?php foreach ($todos['complete'] as $todo): ?>
    <li>
      <form action="/" >
        <input type="checkbox" <?= $todo['completed'] ? 'checked' : '' ?>>
      </form>
      <?= $todo['description'] ?>
      <?= $todo['due'] ?>
    </li>
<?php endforeach ?>

<?php foreach ($todos['incomplete'] as $todo): ?>
    <li>
      <form action="/" >
        <input type="checkbox" <?= $todo['completed'] ? 'checked' : '' ?>>
      </form>
      <?= $todo['description'] ?>
      <?= $todo['due'] ?>
    </li>
<?php endforeach ?>
</ul>