
<?php require __DIR__ . '/../partials/head.php'; ?>

<div class="container mt-4">
    <div class="jumbotron bg-secondary text-white p-4 mb-4 rounded">
        <h1><?=$title?></h1>
        <p>Unesite naslov i opis zadatka.</p>
    </div>
    
    <form action="/zadaci-store" method="POST">
        <div class="mb-3">
        <label for="naslov" class="form-label">Naslov</label>
        <input type="text" class="form-control" id="naslov" name="naslov" required>
        </div>
        <div class="mb-3">
        <label for="opis" class="form-label">Opis</label>
        <textarea class="form-control" id="opis" name="opis" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status0" value="2">
                    <label class="form-check-label" for="status0">
                  Gotovo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                    <label class="form-check-label" for="status1">
                       U radu
                    </label>
                </div>
            </div>
            </div>
        <button type="submit" class="btn btn-primary">Spremi</button>
    </form>
</div>

<?php require __DIR__ . '/../partials/foot.php'; ?>