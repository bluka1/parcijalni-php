<?php include 'views/index.view.php'; ?>

<div class="mb-4">
  <form method="POST" action="/store">
    <div class="mb-3">
      <input type="text" name="naslov" class="form-control" placeholder="Naslov zadatka" required>
    </div>
    <div class="mb-3">
      <textarea name="opis" class="form-control" placeholder="Opis zadatka"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Dodaj zadatak</button>
  </form>
</div>

<?php foreach ($todos as $todo): ?>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title"><?= htmlspecialchars($todo['naslov']) ?></h5>
      <p class="card-text"><?= htmlspecialchars($todo['opis']) ?></p>
      <p>Status: <strong><?= $todo['status'] ?></strong></p>
      <a href="/done?id=<?= $todo['id'] ?>" class="btn btn-sm btn-primary">Označi kao dovršeno</a>
      <a href="/delete?id=<?= $todo['id'] ?>" class="btn btn-sm btn-danger">Obriši</a>
    </div>
  </div>
<?php endforeach; ?>

</div> 
</body>
</html>