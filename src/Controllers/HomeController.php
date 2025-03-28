<?php
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class HomeController {
    protected $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function index() {
        echo $this->view->make('home')->render();
    }
}