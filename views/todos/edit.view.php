<?php require 'views/partials/head.php' ?>

<div class="container mt-4">
  <article class="rounded border p-4 border-dark m-4">
    <form action="/todo-store-edited" method="POST">
      <div class="mb-4">
        <label class='w-100'>Zadatak:
          <input class="d-block w-100" type="text" name="naslov" value="<?= $todo['naslov']?>" />
        </label>
      </div>
      <div class="mb-4">
        <label class='w-100'>Tijelo članka:
          <textarea name="tijelo" rows='5' class="d-block w-100"><?= $todo['opis'] ?></textarea>
        </label>
      </div>
      <input type="hidden" name="id" value="<?=$todo['id']?>">
      <input type="submit" value="Spremi promjene">
    </form>
  </article>
</div>

<?php require 'views/partials/foot.php' ?>