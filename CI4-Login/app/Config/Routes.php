<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');             
$routes->get('login', 'Login::index');         
$routes->post('login/auth', 'Login::auth');    
$routes->get('home', 'Home::display');          
$routes->get('logout', 'Login::logout');    
$routes->get('login/logout', 'Login::logout');
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');

