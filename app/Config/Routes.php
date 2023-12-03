<?php

use CodeIgniter\Router\RouteCollection;

/** 
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Pages::index');

// $routes->get('/admin/create', 'Admin::create');
// $routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
// $routes->delete('/admin/(:num)', 'Admin::delete/$1');
// $routes->get('admin/detail/(:any)', 'Admin::detail/$1');


// $routes->add('/login', 'Login::index');
// $routes->add('/login/proses', 'Login::proses');
// $routes->add('/login/logout', 'Login::logout');
// $routes->add('/register', 'Register::index');
// $routes->add('/register/tambah_aksi', 'Register::tambah_aksi');
// $routes->add('/home', 'Home::index');


$routes->get('/', 'Pages::index');
$routes->add('/login', 'A_Login::index');
$routes->add('/login/proses', 'A_Login::proses');
$routes->add('/login/logout', 'A_Login::logout');
$routes->get('/admin/create', 'Admin::create');
$routes->add('/admin/add', 'Admin::add');
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->delete('/admin/(:num)', 'Admin::delete/$1');
$routes->get('admin/detail/(:any)', 'Admin::detail/$1');
$routes->add('/F_login', 'Login::index');
$routes->add('/F_login/proses', 'Login::proses');
$routes->add('/F_login/logout', 'Login::logout');
$routes->add('/F_register', 'Register::index');
$routes->add('/F_register/tambah_aksi', 'Register::tambah_aksi');
// $routes->delete('/user/(:num)', 'User::delete/$1');


