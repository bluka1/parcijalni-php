<?php require_once "index.view.php"; ?>

<div class="container mt-4">
  <h2>Edit the task</h2>
  <form action="/parcijalni-php/index.php?page=update" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($todo['id']) ?>" />
    <div class="mb-3">
      <label for="naslov" class="form-label">Title</label>
      <input type="text" id="naslov" name="naslov" class="form-control" value="<?= htmlspecialchars($todo['naslov']) ?>" required />
    </div>
    <div class="mb-3">
      <label for="opis" class="form-label">Description</label>
      <textarea id="opis" name="opis" class="form-control" rows="4"><?= htmlspecialchars($todo['opis']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="/parcijalni-php/index.php?page=index" class="btn btn-secondary ms-2">Quit</a>
  </form>
</div>
