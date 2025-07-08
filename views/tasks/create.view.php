<?php require 'views/partials/head.php' ?>

<form method="POST" action="/tasks-create" class="p-5 w-75 mx-auto">
  <h2>Unesi novi zadatak</h2>
  <div class="form-group py-3">
    <label for="naslov">Naslov</label>
    <input type="text" class="form-control" id="naslov" name="naslov" placeholder="Vaš naslov">
  </div>
  <div class="form-group py-3">
    <label for="opis">Opis zadatka</label>
    <textarea class="form-control" id="opis" name="opis" rows="7" placeholder="Tekst zadatka...."></textarea>
  </div>
  <input type="submit" value="Dodaj zadatak" class="p-2 bg-primary rounded mt-4 text-white">
</form>

<?php require 'views/partials/foot.php' ?>