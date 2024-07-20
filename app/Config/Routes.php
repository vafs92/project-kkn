<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');


$routes->get('/penduduk', 'Dashboard::penduduk');
$routes->get('/wisata', 'Dashboard::wisata');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/process', 'Auth::process');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/admin', 'AdminController');

$routes->get('/register', 'Auth::register');
$routes->post('/auth/register', 'Auth::registerProcess');
$routes->get('/', 'Home::index');


// $routes->get('/admin', 'Admin::index');
// $routes->get('/admin/create', 'Admin::create');
// $routes->post('/admin/store', 'Admin::store');
// $routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
// $routes->post('/admin/update/(:segment)', 'Admin::update/$1');
// $routes->post('/admin/delete/(:segment)', 'Admin::delete/$1');

// $routes->get('/admin/lokasi_wisata', 'LokasiWisataController::index');
// $routes->get('/admin/lokasi_wisata/create', 'LokasiWisataController::create');
// $routes->post('/admin/lokasi_wisata/store', 'LokasiWisataController::store');
// $routes->get('/admin/lokasi_wisata/edit/(:num)', 'LokasiWisataController::edit/$1');
// $routes->post('/admin/lokasi_wisata/update/(:num)', 'LokasiWisataController::update/$1');
// $routes->post('/admin/lokasi_wisata/delete/(:num)', 'LokasiWisataController::delete/$1');
$routes->get('/admin', 'AdminController::index');

$routes->get('/admin/createPenduduk', 'AdminController::createPenduduk');
$routes->post('/admin/store', 'AdminController::storePenduduk');
$routes->get('/admin/edit/(:num)', 'AdminController::editPenduduk/$1');
$routes->post('/admin/update/(:num)', 'AdminController::updatePenduduk/$1');
$routes->post('/admin/delete/(:num)', 'AdminController::deletePenduduk/$1');

$routes->get('/admin/createWisata', 'AdminController::createWisata');
$routes->post('/admin/storeWisata', 'AdminController::storeWisata');
$routes->get('/admin/editWisata/(:num)', 'AdminController::editWisata/$1');
$routes->post('/admin/updateWisata/(:num)', 'AdminController::updateWisata/$1');
$routes->post('/admin/deleteWisata/(:num)', 'AdminController::deleteWisata/$1');
