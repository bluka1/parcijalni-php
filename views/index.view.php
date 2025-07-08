<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dodaj novi zadatak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="/" class="navbar-brand">To-Do App</a>
      </div>
    </nav>
  </header>

  <div class="container mt-4">
    <h1>Dodaj novi zadatak</h1>
    <form method="POST" action="/create">
      <div class="mb-3">
        <label for="naslov" class="form-label">Naslov</label>
        <input type="text" class="form-control" id="naslov" name="naslov" required />
      </div>
      <div class="mb-3">
        <label for="opis" class="form-label">Opis</label>
        <textarea class="form-control" id="opis" name="opis" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Dodaj zadatak</button>
      <a href="/" class="btn btn-secondary ms-2">Natrag na listu</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>