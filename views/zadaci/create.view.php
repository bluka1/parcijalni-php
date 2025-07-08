<?php require 'views/partials/head.php' ?>

    <form method="POST" action="/zadaci-store" class="p-5 w-75 mx-auto">
        <h2>Unesi novi zadatak</h2>
        <div class="form-group py-3">
            <label for="naslov">Naslov zadatka</label>
            <input type="text" class="form-control" id="naslov" name="naslov" placeholder="Naslov zadatka">
        </div>
        <div class="form-group py-3">
            <label for="opis">Opis</label>
            <input type="text" class="form-control" id="opis" name="opis" rows="7" placeholder="opis">
        </div>
        <div class="form-group py-3">
            <input type="hidden" name="status" value="undone">
        </div>
        <input type="submit" value="Dodaj zadatak" class="p-2 bg-primary rounded mt-4 text-white">
    </form>

<?php require 'views/partials/footer.php' ?>