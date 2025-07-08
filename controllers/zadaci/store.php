<?php

require __DIR__ . '/../../models/Zadaci.php';

$zadaciModel = new Zadaci();

$naslovZadatka = $_POST['naslov'];
$opis = $_POST['opis'];
$status = $_POST['status'];

$zadaciModel->create(htmlspecialchars($naslovZadatka), htmlspecialchars($opis), htmlspecialchars($status));

redirect('/zadaci');
