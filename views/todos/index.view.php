<?php require 'views/partials/head.php'; ?>

<div class="container mt-4">
  <div class="d-flex p-2 flex-column-reverse">
    <!-- mjesto za foreach i todo-ove -->
     <?php foreach($todos as $todo) :?>
    <article class="rounded border p-4 border-dark m-4">
      <h2><?= $todo['naslov'] ?></h2>
      <p><?= $todo['opis'] ?></p>
      <small><?= $todo['createdAt'] ?></small>
      <form action="/todo-delete" method="POST">
        <input type="hidden" name="id" value="<?=$todo['id']?>">
        <input type="submit" value="Obriši" />
      </form>
      <a href="/todo-update?id=<?=$todo['id']?>">Ažuriraj todo</a>
    </article>
  <?php endforeach; ?>
  </div>
</div>
<?php require 'views/partials/foot.php'; ?>