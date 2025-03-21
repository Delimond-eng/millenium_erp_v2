<?php
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class MenuController {
    protected $view;

    public function __construct($view) {
        $this->view = $view;
    }

   
}