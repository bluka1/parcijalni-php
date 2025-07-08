<?php require 'views/partials/head.php' ?>

<div class="container mt-4">
  <article class="rounded border p-4 border-dark m-4">
    <form action="/tasks-store-edited" method="POST">
      <div class="mb-4">
        <label class='w-100'>Naslov:
          <input class="d-block w-100" type="text" name="naslov" value="<?= $task['naslov']?>" />
        </label>
      </div>
      <div class="mb-4">
        <label class='w-100'>Opis zadatka:
          <textarea name="opis" rows='5' class="d-block w-100"><?= $task['opis'] ?></textarea>
        </label>
      </div>   
      <div class="mb-4">
        <label class='w-100'>Status:
          <select name="status" class="d-block w-100">
            <option value="undone" <?= $task['status'] === 'undone' ? 'selected' : '' ?>>Undone</option>
            <option value="done" <?= $task['status'] === 'done' ? 'selected' : '' ?>>Done</option>
          </select>
        </label>
      </div>  
      <input type="hidden" name="id" value="<?=$task['id']?>">
      <input type="submit" value="Spremi promjene">
    </form>
  </article>
</div>

<?php require 'views/partials/foot.php' ?>