<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('test', function (RouteCollection $routes) {
    $routes->get('common', 'Test::commontTest');
});
