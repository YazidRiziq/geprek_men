<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('admin/dashboard', 'Admin\DashboardController::index');
$routes->get('admin/menu', 'Admin\MenuController::index');
$routes->get('admin/employees', 'Admin\EmployeeController::index');
$routes->get('admin/roles', 'Admin\RoleController::index');
$routes->get('admin/categories', 'Admin\CategoryController::index');
$routes->get('admin/orders', 'Admin\OrderController::index');


// Testing
$routes->get('admin/items', 'Admin\ItemController::index');
$routes->get('admin/items/create', 'Admin\ItemController::create');
$routes->post('admin/items/store', 'Admin\ItemController::store');


