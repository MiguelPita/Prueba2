<?php

use Silex\Application;

require_once __DIR__ . '/../vendor/autoload.php';

echo "MVC_APP_SILEX";

$app = new Application();

$env = getenv('APP_ENV') ?: 'prod';

$app->register(
    new Igorw\Silex\ConfigServiceProvider(
        __DIR__ . "/../config/$env.json"
    )
);

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    ['twig.path' => __DIR__ . '/../views']
);

$app->register(
    new Silex\Provider\MonologServiceProvider(),
    ['monolog.logfile' => __DIR__ . '/../app.log']
);

$app->register(new Silex\Provider\DoctrineServiceProvider(), [
    'dbs.options' => [
        [
            'driver'    => 'pdo_mysql',
            'host'      => '127.0.0.1',
            'dbname'    => 'cookbook',
            'user'      => $app['database']['user'],
            'password'  => $app['database']['password']
        ]
    ]
]);

/* TODO: mapeo entre la petición 
* y el controloador/método que la atiende
*/



//Inicio del app
$app->run();
