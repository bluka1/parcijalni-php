<?php

function view($view, $data = []) {
    extract($data);
    require __DIR__ . '/../views/' . $view;
}

function redirect($path) {
    header("Location: $path");
    exit;
}