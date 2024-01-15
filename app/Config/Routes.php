<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomePage::index');
$routes->get('/visimisi', 'VisiMisi::index');
$routes->get('/programbelajar', 'ProgramBelajar::index');
$routes->get('/bukutamu', 'BukuTamu::index');
$routes->post('/kirim-bukutamu', 'BukuTamu::store');
$routes->group('', ['filter' => 'login'], function($routes){
    $routes->get('/admin', 'Admin\HomePage::index');
    $routes->get('/admin/bukutamu', 'Admin\BukuTamu::index');
});
