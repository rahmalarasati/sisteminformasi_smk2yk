<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('auth', 'Auth::index');
$routes->post('auth/cek_login', 'Auth::cek_login');
$routes->get('auth/index', 'Auth::index');
$routes->get('auth/cek_login', 'Auth::cek_login');
