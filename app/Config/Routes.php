<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/buku', 'Buku::index');
$routes->get('/buku/(:any)', 'Buku::detail/$1');
?>