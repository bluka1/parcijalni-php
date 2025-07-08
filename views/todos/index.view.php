<?php require 'views/partials/head.php' ?>

<div class="container mt-4">
  <?php foreach($todos as $todo) :?>
    <article class="rounded border p-4 border-dark m-4">
      <h2><?= $todo['naslov'] ?></h2>
      <p><?= $todo['opis'] ?></p>
      <p><?= $todo['status'] ?></p>
      <small><?= $todo['createdAt'] ?></small>
      <p>ID članka: <?= $todo['id'] ?></p> 
      <!-- <form action="/articles-delete" method="POST">
        <input type="hidden" name="id" value="<?=$todo['id']?>">
        <input type="submit" value="Obriši" />
      </form> -->
      <!-- <a href="/articles-edit?id=<?=$todo['id']?>">Ažuriraj članak</a> -->
    </article>
  <?php endforeach; ?>
</div>

<?php require 'views/partials/foot.php' ?>