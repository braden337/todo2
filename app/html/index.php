<?php
require_once '../app.php';

Auth::user();
Todo::add();

$todos = Todo::all();

include 'header.php'
?>
<section>
  <div id="action-button"><i class="fas fa-plus"></i></div>


<a href="/"><h1>Hi <?= User::current()->name ?></h1></a>

<form action="/logout.php" method="POST">
    <?= Auth::csrf_field() ?>
    <input class="btn btn-danger mb-3" type="submit" value="Logout">
</form>

<div class="tags">
<div class="card border-success mb-3">
  <div class="card-header">Personal</div>
  <div class="card-body text-success">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card border-primary mb-3">
  <div class="card-header">Work</div>
  <div class="card-body text-primary">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-primary mb-3">
  <div class="card-header">Work</div>
  <div class="card-body text-primary">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-primary mb-3">
  <div class="card-header">Work</div>
  <div class="card-body text-primary">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-primary mb-3">
  <div class="card-header">Work</div>
  <div class="card-body text-primary">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-primary mb-3">
  <div class="card-header">Work</div>
  <div class="card-body text-primary">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<!-- 
<form action="/" method="POST">
    <input type="text" name="description">
    <input type="range" min="5" max="180" step="5" value="5" name="minutes" id="minutes">
    <span id="currentMinutes">5 minutes</span>
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
</ul> -->

</section>

<?php include 'footer.php' ?>