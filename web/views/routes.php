<?php

use web\views\BlogController.php;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('index', '/')
        ->controller([BlogController::class, 'index'])
    ;

    $routes->add('matches', '/matches/{slug}')
        ->controller([BlogController::class, 'show'])
    ;
};

?>
