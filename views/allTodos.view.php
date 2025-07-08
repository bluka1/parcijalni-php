<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lista zadataka</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="/" class="navbar-brand">To-Do App</a>
        <div class="navbar-nav">
          <a href="/create" class="nav-link">Dodaj zadatak</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-4">
    <h1>Lista zadataka</h1>

    <div class="d-flex p-2 flex-column-reverse">
      <!-- mjesto za foreach i todo-ove -->
      <?php if (empty($todos)): ?>
        <p>Nema zadataka.</p>
      <?php else: ?>
        <?php foreach ($todos as $todo): ?>
          <?php include 'todo.view.php'; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>