<?php

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\FactureController;

return [
    '/' => [HomeController::class, 'index'],
    '/sign_in' => [AuthController::class, 'login'],
    '/sign_up' => [AuthController::class, 'register'],
    '/database' => [AuthController::class, 'dbselect'],
    '/factures' => [FactureController::class, 'viewFacs'],
    '/facture_create' => [FactureController::class, 'createFacView'],
];