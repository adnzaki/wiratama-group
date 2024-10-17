<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('wiratama-estate-3', 'Products::wiratamaEstate3');
$routes->get('wiratama-residence-2', 'Products::wiratamaResidence2');
$routes->group('test', function (RouteCollection $routes) {
    $routes->get('common', 'Test::commontTest');
});
