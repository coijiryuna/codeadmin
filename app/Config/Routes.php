<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', [
    'filter'    => 'permission:back-office',
    'namespace' => 'App\Controllers'
]);


// include('App/Config/Pendistribusian');

// start wilayah
$routes->match(['get', 'post'], 'provinsi', 'Untility\WilayahController::provinsi', ['as' => 'provinsi']);
$routes->match(['get', 'post'], 'kabupaten', 'Untility\WilayahController::kabupaten', ['as' => 'kabupaten']);
$routes->match(['get', 'post'], 'kecamatan', 'Untility\WilayahController::kecamatan', ['as' => 'kecamatan']);
$routes->match(['get', 'post'], 'desa', 'Untility\WilayahController::desa', ['as' => 'desa']);
