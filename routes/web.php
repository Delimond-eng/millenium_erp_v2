<?php

use App\Controllers\HomeController;
use App\Controllers\AuthController;

return [
    '/' => [HomeController::class, 'index'],
    '/login' => [AuthController::class, 'login'],
    '/sign_up' => [AuthController::class, 'register'],
];