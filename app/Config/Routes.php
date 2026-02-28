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

$routes->get('admin/categories/create', 'Admin\CategoryController::create');
$routes->post('admin/categories/store', 'Admin\CategoryController::store');
$routes->get('admin/categories/edit/(:num)', 'Admin\CategoryController::edit/$1');
$routes->post('admin/categories/update/(:num)', 'Admin\CategoryController::update/$1');
$routes->post('admin/categories/delete/(:num)', 'Admin\CategoryController::delete/$1');


// Testing
$routes->get('admin/items', 'Admin\ItemController::index');
$routes->get('admin/items/create', 'Admin\ItemController::create');
$routes->post('admin/items/store', 'Admin\ItemController::store');


