<?php

use App\Controllers\Task;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/task/(:segment)', [Task::class, 'index']);
$routes->get('/task', [Task::class, 'pageNew']);
$routes->post('/task', [Task::class, 'newTask']);


