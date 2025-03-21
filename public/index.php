<?php
require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Events\Dispatcher;

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$config = require __DIR__ . '/../config/database.php';
require __DIR__ .'/../helpers/utils.php';

try{
    $capsule = new Capsule;
    $capsule->addConnection($config["default"]);

    /* foreach ($config['connections'] as $name => $dbConfig) {
        $capsule->addConnection($dbConfig, $name);
    } */

    $capsule->setAsGlobal();
    $capsule->bootEloquent();
}
catch(\PDOException $e){
    echo ''. $e->getMessage() .'';
    die();
}

$viewPaths = [__DIR__ . '/../src/Views'];
$cachePath = __DIR__ . '/../cache';

$filesystem = new Filesystem();

$resolver = new EngineResolver();
$resolver->register('blade', function () use ($filesystem, $cachePath) {
    return new CompilerEngine(new BladeCompiler($filesystem, $cachePath));
});
$resolver->register('php', function () {
    return new PhpEngine();
});

$viewFinder = new FileViewFinder($filesystem, $viewPaths);

$blade = new Factory($resolver, $viewFinder, new Dispatcher());

$routesWeb = require '../routes/web.php';
$routesApi = require '../routes/api.php';
$routes = array_merge($routesWeb, $routesApi);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($path, $routes)) {
    [$controller, $method] = $routes[$path];
    (new $controller($blade))->$method();
} else {
    http_response_code(404);
    echo $blade->make('errors.404')->render();
}




