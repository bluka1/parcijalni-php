<div class="card mb-3">
  <div class="card-header">
    <?= htmlspecialchars($todo['naslov']) ?>
  </div>
  <div class="card-body">
    <p><?= nl2br(htmlspecialchars($todo['opis'])) ?></p>
    <p><strong>Status:</strong> <?= $todo['status'] === 'done' ? 'Dovršeno' : 'Nije dovršeno' ?></p>

    <?php if ($todo['status'] !== 'done'): ?>
      <a href="/complete?id=<?= $todo['id'] ?>" class="btn btn-success btn-sm">Označi kao dovršeno</a>
    <?php endif; ?>

    <a href="/edit?id=<?= $todo['id'] ?>" class="btn btn-warning btn-sm">Uredi</a>
    <a href="/delete?id=<?= $todo['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Jeste li sigurni da želite obrisati ovaj zadatak?');">Obriši</a>
  </div>
</div>