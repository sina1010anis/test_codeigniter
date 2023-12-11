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
$routes->get('/task/edit/(:num)', [Task::class, 'editTask']);
$routes->post('/task/edit/(:num)', [Task::class, 'editTaskPost']);


