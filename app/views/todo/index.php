
<?php require __DIR__ . '/../partials/head.php'; ?>

<div class="container mt-4">
  <?php foreach($todos as $todo) :?>
    <article class="rounded border p-4 border-dark m-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4"><?= $todo['naslov'] ?></h1>
        
       <div class="d-flex gap-2">
  <form action="/zadaci-delete" method="POST">
    <input type="hidden" name="id" value="<?=$todo['id']?>">
    <button type="submit" class="btn btn-danger">Obriši</button>
  </form>
  <a href="/zadaci-edit?id=<?= $todo['id'] ?>" class="btn btn-primary">Uredi</a>
</div>
     
      </div>
    
      
      <p><small><?= $todo['opis'] ?></small></p>
      <div>
        <span class="badge bg-<?= $todo['status'] == 'done' ? 'success' : 'warning' ?>">
          <?= $todo['status'] ?>
        </span>

      </div>
      <small><?= $todo['createdAt'] ?></small>
      <p>ID zadatka: <?= $todo['id'] ?></p> 

      
         
    
     
    </article>
  <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../partials/foot.php'; ?>