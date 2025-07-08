<?php

require __DIR__ . '/../../models/Liste.php';

$listeZadataka = new Liste();
$zadaci = $listeZadataka->getAll();

view('listeZadataka/index.view.php', [
  'zadaci' => $zadaci
]);
