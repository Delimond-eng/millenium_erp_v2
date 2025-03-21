<?php
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class AuthController {
    protected $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function login() {
        echo $this->view->make('auth.signin')->render();
    }
    public function register() {
        echo $this->view->make('auth.signup')->render();
    }

    public function dbSelect() {
        echo $this->view->make('dbselect')->render();
    }
}