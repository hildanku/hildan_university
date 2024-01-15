<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomePage::index');
$routes->get('/visimisi', 'VisiMisi::index');
$routes->get('/programbelajar', 'ProgramBelajar::index');
$routes->get('/bukutamu', 'BukuTamu::index');


