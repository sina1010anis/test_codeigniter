<?php

use App\Controllers\Auth;
use App\Controllers\Task;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("", ['filter' => 'Rem'], function (RouteCollection $routes) {

    $routes->get('/', 'Home::index');
    
    $routes->get('/task/(:segment)', [Task::class, 'index'], ['filter' => 'AuthFilter']);

    $routes->get('/task', [Task::class, 'pageNew'], ['filter' => 'AuthFilter']);

    $routes->post('/task', [Task::class, 'newTask'], ['filter' => 'AuthFilter']);

    $routes->get('/task/edit/(:num)', [Task::class, 'editTask'], ['filter' => 'AuthFilter']);

    $routes->post('/task/edit/(:num)', [Task::class, 'editTaskPost'], ['filter' => 'AuthFilter']);

    $routes->get('/image', [Task::class, 'imagePage'], ['filter' => 'AuthFilter']);

    $routes->post('/image', [Task::class, 'imageMethod'], ['filter' => 'AuthFilter']);

    $routes->get('/test', [Task::class, 'testFunction']);




    $routes->get('/register', [Auth::class, 'registerPage']);

    $routes->get('/rest-password', [Auth::class, 'restPasswordPage']);

    $routes->post('rest-password', [Auth::class, 'restPasswordMethod']);

    $routes->post('rest-password/edit/(:segment)', [Auth::class, 'restPasswordEdit']);

    $routes->get('rest-password/get/(:segment)', [Auth::class, 'restPasswordCheck']);

    $routes->post('/register', [Auth::class, 'registerMethod']);

    $routes->get('/login', [Auth::class, 'loginPage']);

    $routes->post('/login', [Auth::class, 'loginMethod']);

    $routes->get('/logout', [Auth::class, 'logoutMethod']);

    $routes->get('/home', [Auth::class, 'home']);


});


