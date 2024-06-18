<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// http://localhost/aulati3/public/

            //slug //Controller::função -> view
$routes->get('/', 'Home::index');

$routes->get('/teste', 'Home::teste');
 //-> view teste
