<?php
class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require __DIR__ . "/../view/{$view}.view.php";
    }
}
