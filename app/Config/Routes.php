<?php

use App\Controllers\Auth;
use App\Controllers\Task;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/task/(:segment)', [Task::class, 'index'], ['filter' => 'AuthFilter']);
$routes->get('/task', [Task::class, 'pageNew'], ['filter' => 'AuthFilter']);
$routes->post('/task', [Task::class, 'newTask'], ['filter' => 'AuthFilter']);
$routes->get('/task/edit/(:num)', [Task::class, 'editTask'], ['filter' => 'AuthFilter']);
$routes->post('/task/edit/(:num)', [Task::class, 'editTaskPost'], ['filter' => 'AuthFilter']);

$routes->get('/register', [Auth::class, 'registerPage']);
$routes->post('/register', [Auth::class, 'registerMethod']);
$routes->get('/login', [Auth::class, 'loginPage']);
$routes->post('/login', [Auth::class, 'loginMethod']);
$routes->get('/logout', [Auth::class, 'logoutMethod']);
$routes->get('/home', [Auth::class, 'home']);


