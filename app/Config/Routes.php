<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin/items', 'Admin\ItemController::index');
$routes->get('admin/items/create', 'Admin\ItemController::create');
$routes->post('admin/items/store', 'Admin\ItemController::store');
