<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/buku', 'Buku::index');

$routes->get('/buku/tambah', 'Buku::tambah');             // tambah buku
$routes->put('/buku/update/(:num)', 'Buku::update/$1');   // update
$routes->post('/buku/simpan', 'Buku::simpan');            // simpan buku
$routes->delete('/buku/(:num)', 'Buku::hapus/$1');        // delete
$routes->get('/buku/ubah/(:num)', 'Buku::ubah/$1');       // menuju tampilan ubah
$routes->get('/buku/(:any)', 'Buku::detail/$1');          // menuju tampilan detail
?>