<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->group('superadmin', ['filter' => 'role:superadmin'], function ($routes) {
    // Cabang
    $routes->get('cabang', 'Superadmin\CabangController::index');
    $routes->get('cabang/create', 'Superadmin\CabangController::create');
    $routes->post('cabang/store', 'Superadmin\CabangController::store');
    $routes->get('cabang/edit/(:num)', 'Superadmin\CabangController::edit/$1');
    $routes->post('cabang/update/(:num)', 'Superadmin\CabangController::update/$1');
    $routes->get('cabang/delete/(:num)', 'Superadmin\CabangController::delete/$1');

    // Panitia
    $routes->get('panitia', 'Superadmin\PanitiaController::index');
    $routes->get('panitia/create', 'Superadmin\PanitiaController::create');
    $routes->post('panitia/store', 'Superadmin\PanitiaController::store');
    $routes->get('panitia/edit/(:num)', 'Superadmin\PanitiaController::edit/$1');
    $routes->post('panitia/update/(:num)', 'Superadmin\PanitiaController::update/$1');
    $routes->get('panitia/delete/(:num)', 'Superadmin\PanitiaController::delete/$1');
});

$routes->get('/unauthorized', 'Unauthorized::index');
