<?php require 'views/partials/head.php' ?>

<div class="container mt-4">
  <?php foreach($tasks as $task) :?>
    <article class="rounded border p-4 border-dark m-4">
      <h2><?= $task['naslov'] ?></h2>
      <p><?= $task['opis'] ?></p>
      <p>Status: <?= $task['status'] ?></p>
      <small><?= $task['createdAt'] ?></small>
      <br>
      <form action="/tasks-delete" method="POST">
        <input type="hidden" name="id" value="<?=$task['id']?>">
        <input type="submit" value="Obriši" />
      </form>
      <a href="/tasks-edit?id=<?=$task['id']?>">Ažuriraj zadatak</a>
    </article>
  <?php endforeach; ?>
</div>

<?php require 'views/partials/foot.php' ?>