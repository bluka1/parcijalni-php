<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Zadaci</title></head>
<body>
    <h1>Lista zadataka</h1>
    <a href="/todo/add"> Dodaj zadatak</a>
    <ul>
        <?php if (!empty($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?= htmlspecialchars($task['title']) ?> 
                    [<?= $task['status'] ? 'da' : 'ne' ?>]
                    <a href="/todo/complete?id=<?= $task['id'] ?>">✔ Dovrši</a>
                    <a href="/todo/delete?id=<?= $task['id'] ?>">🗑 Obriši</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nema zadataka.</p>
        <?php endif; ?>
    </ul>
</body>
</html>