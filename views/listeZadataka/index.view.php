<?php require __DIR__ . '/../partials/head.php' ?>

<div class="container mt-4">
  <?php foreach($zadaci as $zadatak) :?>
    <article class="rounded border p-4 border-dark m-4">
      <h2><?= $zadatak['naslov'] ?></h2>
      <p><?= $zadatak['opis'] ?></p>
      <small>Status: <?= $zadatak['status'] ?></small><br>
      <small>Datum: <?= $zadatak['createdAt'] ?></small>
    </article>
  <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../partials/foot.php' ?>
