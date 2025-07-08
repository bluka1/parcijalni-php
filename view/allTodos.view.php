<?php require_once "index.view.php"; ?>

<div class="container mt-4">
  <form action="/parcijalni-php/index.php?page=create" method="POST" class="mb-4">
    <div class="mb-3">
      <input type="text" name="naslov" class="form-control" placeholder="Naslov zadatka" required />
    </div>
    <div class="mb-3">
      <textarea name="opis" class="form-control" placeholder="Opis zadatka"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Dodaj zadatak</button>
  </form>

  <div class="d-flex flex-column-reverse">
    <?php foreach($todos as $todo): ?>
      <div class="card mb-2 <?= $todo['status'] === 'done' ? 'bg-success text-white' : '' ?>">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <h5 class="card-title"><?= htmlspecialchars($todo['naslov']) ?></h5>
            <p class="card-text"><?= nl2br(htmlspecialchars($todo['opis'])) ?></p>
            <small>Published: <?= $todo['createdAt'] ?></small>
          </div>
          <div>
            <a href="/parcijalni-php/index.php?page=edit&id=<?= $todo['id'] ?>" class="btn btn-sm btn-info me-2">Uredi</a>

            <?php if ($todo['status'] === 'undone'): ?>
              <a href="/parcijalni-php/index.php?page=update-status&id=<?= $todo['id'] ?>&status=done" class="btn btn-sm btn-success me-2">Označi dovršenim</a>
            <?php else: ?>
              <a href="/parcijalni-php/index.php?page=update-status&id=<?= $todo['id'] ?>&status=undone" class="btn btn-sm btn-warning me-2">Vrati na nedovršeno</a>
            <?php endif; ?>

            <a href="/parcijalni-php/index.php?page=delete&id=<?= $todo['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Jeste li sigurni da želite obrisati zadatak?')">Obriši</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
