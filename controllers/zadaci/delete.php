<?php

require __DIR__ . '/../../models/Zadaci.php';

$zadaciModel = new Zadaci();

$idToDelete = $_POST['id'];
$zadaciModel->delete($idToDelete);

redirect('/zadaci');
