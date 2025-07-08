<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8" />
  <title>Uredi zadatak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
  <h1>Uredi zadatak</h1>
  <form method="POST" action="/update">
    <input type="hidden" name="id" value="<?= htmlspecialchars($todo['id']) ?>" />
    <div class="mb-3">
      <label for="naslov" class="form-label">Naslov</label>
      <input type="text" class="form-control" id="naslov" name="naslov" value="<?= htmlspecialchars($todo['naslov']) ?>" required />
    </div>
    <div class="mb-3">
      <label for="opis" class="form-label">Opis</label>
      <textarea class="form-control" id="opis" name="opis" rows="3"><?= htmlspecialchars($todo['opis']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Spremi promjene</button>
    <a href="/" class="btn btn-secondary ms-2">Odustani</a>
  </form>
</div>
</body>
</html>