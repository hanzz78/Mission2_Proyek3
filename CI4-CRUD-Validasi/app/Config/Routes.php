<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::display');
$routes->get('/home', 'Home::display');
$routes->get('/berita', 'Berita::display');
$routes->get('/mahasiswa', 'Mahasiswa::display');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->get('/mahasiswa/edit/(:segment)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:segment)', 'Mahasiswa::update/$1');
$routes->get('/mahasiswa/delete/(:segment)', 'Mahasiswa::delete/$1');
$routes->get('/mahasiswa/detail/(:segment)', 'Mahasiswa::detail/$1');
