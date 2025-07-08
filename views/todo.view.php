<?php include 'views/index.view.php'; ?>

<div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title"><?= htmlspecialchars($todo['naslov']) ?></h5>
    <p class="card-text"><?= htmlspecialchars($todo['opis']) ?></p>
    <p>Status: <?= $todo['status'] ?></p>
    <p>Dodano: <?= $todo['createdAt'] ?></p>
  </div>
</div>

</div>
</body>
</html>