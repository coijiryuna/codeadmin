<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('admin', function ($routes) {

    /**
     * Admin routes.
     **/
    $routes->group('/', [
        'namespace'  => 'App\Controllers',
        'filter'     => 'permission:back-office',
    ], function ($routes) {
        $routes->get('/', 'Home::index');
    });

    /**
     * User routes.
     **/
    $routes->group('user', [
        'filter'    => 'permission:back-office',
        'namespace' => 'App\Controllers\Admin',
    ], function ($routes) {
        $routes->match(['get', 'post'], 'profile', 'UserController::profile', ['as' => 'user-profile']);
        $routes->resource('manage', [
            'filter'     => 'permission:manage-user',
            'namespace'  => 'App\Controllers\Admin',
            'controller' => 'UserController',
            'except'     => 'show',
        ]);
    });

    /**
     * Permission routes.
     */
    $routes->resource('permission', [
        'filter'     => 'permission:role-permission',
        'namespace'  => 'App\Controllers\Admin',
        'controller' => 'PermissionController',
        'except'     => 'show,new',
    ]);

    /**
     * Role routes.
     */
    $routes->resource('role', [
        'filter'     => 'permission:role-permission',
        'namespace'  => 'App\Controllers\Admin',
        'controller' => 'RoleController',
    ]);

    /**
     * Menu routes.
     */
    $routes->resource('menu', [
        'filter'     => 'permission:menu-permission',
        'namespace'  => 'App\Controllers\Admin',
        'controller' => 'MenuController',
        'except'     => 'new,show',
    ]);

    $routes->put('menu-update', 'MenuController::new', [
        'filter'    => 'permission:menu-permission',
        'namespace' => 'App\Controllers\Admin',
        'except'    => 'show',
        'as'        => 'menu-update',
    ]);
});
