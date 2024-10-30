<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('wiratama-estate-3', function (RouteCollection $routes) {
    $routes->get('/', 'Products::wiratamaEstate3');
    $routes->get('view/(:any)', 'SingleProduct::index/$1');
});

$routes->group('wiratama-residence-2', function (RouteCollection $routes) {
    $routes->get('/', 'Products::wiratamaResidence2');
    $routes->get('view/(:any)', 'SingleProduct::index/$1');
});

$routes->group('blogs', function (RouteCollection $routes) {
    $routes->get('/', 'Blogs::index');
    $routes->get('(:alpha)/(:any)', 'Blogs::index/$1/$2');
    $routes->get('read-post/(:any)', 'Blogs::readPost/$1');
});

$routes->get('about-us', 'AboutUs::index');
$routes->get('contact', 'Contact::index');

$routes->get('dev-page', 'Development::developmentPage');
$routes->get('dev-page/test-response', 'Development::testResponse');
$routes->post('dev-page/generate-password', 'Development::generatePassword');
$routes->post('dev-page/run-task', 'Development::createProductTable');
$routes->group('test', function (RouteCollection $routes) {
    $routes->get('common', 'Test::commontTest');
});
