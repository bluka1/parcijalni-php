<?php

namespace App\Core;

use App\Core\Database;
 class Router {
  
  private $routes = [];

  public function addRoute(string $method, string $uri, string $controller, string $action) {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
      'action' => $action
    ];
  }

  public function get($uri, $controller, $action) {
    $this->addRoute('GET', $uri, $controller, $action);
  }

  public function post($uri, $controller, $action) {
    $this->addRoute('POST', $uri, $controller, $action);
  }
  public function delete($uri, $controller, $action) {
    $this->addRoute('POST', $uri, $controller, $action);
  }
  public function put($uri, $controller, $action) {
    $this->addRoute('POST', $uri, $controller, $action);
  }

  public function route(string $currentUri, string $method) {
      $db = Database::getInstance();
    foreach($this->routes as $route) {
      if ($currentUri === $route['uri'] && $method === $route['method']) {
        $controllerClass = $route['controller'];
        $controller = new $controllerClass(); // Prosljeđivanje instance baze podataka
        $act = $route['action'];
        return $controller->$act();
      }
    }

    require __DIR__ . '/../views/404.view.php';
  }
}