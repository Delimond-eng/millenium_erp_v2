<?php
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class AuthController {
    protected $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function login() {
        echo $this->view->make('auth.login')->render();
    }
    public function register() {
        echo $this->view->make('auth.register')->render();
    }
}