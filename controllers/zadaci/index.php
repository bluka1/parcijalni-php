<?php

require __DIR__ . '/../../models/Zadaci.php';

$zadaciModel = new Zadaci();

$zadaci = $zadaciModel->getAll();
$zadaciVal = array_values($zadaci);

view('zadaci/index.view.php', [
    'zadaci' => $zadaciVal
]);