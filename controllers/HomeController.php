<?php

class HomeController {
  public function index() {
    view('index.php', [
      'naslov' => 'Aplikacija za Todo'
    ]);
  }
}