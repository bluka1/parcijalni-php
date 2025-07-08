<?php require 'views/partials/head.php' ?>

    <div class="container mt-4">
        <?php foreach($zadaci as $zadatak) :?>
            <article class="rounded border p-4 border-dark m-4">
                <h2><?= $zadatak['naslov'] ?></h2>
                <p><?= $zadatak['opis'] ?></p>
                <p>Status zadatka: 
                    <?= $zadatak['status'] ?></p>
                <a href="/zadaci-edit?id=<?=$zadatak['id']?>">Ažuriraj status</a><br>
                <small><?= $zadatak['createdAt'] ?></small>

                <form action="/zadaci-delete" method="POST">
                    <input type="hidden" name="id" value="<?=$zadatak['id']?>">
                    <input type="submit" value="Obriši" />
                </form>
                
            </article>
        <?php endforeach; ?>
    </div>

<?php require 'views/partials/footer.php' ?>