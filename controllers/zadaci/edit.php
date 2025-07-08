<?php

require __DIR__ . '/../../models/Zadaci.php';

$zadaciModel = new Zadaci();

$zadatakToUpdate = $_GET['id'];

$zadaciModel->updateById($zadatakToUpdate);

redirect('/zadaci');
