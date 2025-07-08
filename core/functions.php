<?php

function view($pathToView, $podaci = []) {
  extract($podaci);
  require __DIR__ . "/../views/{$pathToView}";
}