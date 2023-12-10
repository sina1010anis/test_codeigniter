<?php

use App\Controllers\Task;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/task/(:segment)/(:segment)', 'Task::index/$1/$2');


