<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('auth', 'Auth::index');
$routes->post('auth/cek_login', 'Auth::cek_login');
$routes->get('auth/index', 'Auth::index');
$routes->get('teknisi', 'TeknisiController::index');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('index2.html', 'Home::index2');
$routes->get('home', 'Home::index');
$routes->get('data siswa', 'DataSiswa::index');

