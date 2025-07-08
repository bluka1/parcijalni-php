<?php

require __DIR__ . '/../../models/Zadaci.php';

$zadaciModel = new Zadaci();

$zadaci = $zadaciModel->getAll();

dd($zadaci);