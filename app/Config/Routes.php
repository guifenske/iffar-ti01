<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //slug , controller função -> view
$routes->get('/', 'Home::index');

// -> view teste
$routes->get('/teste', 'Home::teste');
