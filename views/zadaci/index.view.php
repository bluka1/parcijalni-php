<?php require 'views/partials/head.php' ?>

<div class="container mt-4">
    <?php foreach ($zadaci as $zadatak): ?>
        <article class="rounded border p-4 border-dark m-4">
            <h2><?= $zadatak['naslov'] ?></h2>
            <p><?= $zadatak['opis'] ?></p>
            <p><?= $zadatak['status'] ?></p>
            <small><?= $zadatak['createdAt'] ?></small>

            <form action="/zadaci-delete" method="POST">
                <input type="hidden" name="id" value="<?= $zadatak['id'] ?>">
                <input type="submit" value="Obriši" />
            </form>
            <a href="/zadaci-edit?id=<?= $zadatak['id'] ?>">Ažuriraj zadatak</a>
        </article>
    <?php endforeach; ?>
</div>

<?php require 'views/partials/foot.php' ?>