<?php

use App\Controllers\TaskController;
use App\Controllers\AuthController;
use App\Controllers\Home;
use App\Filters\Auth;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'home']);
$routes->get('/home', [Home::class, 'home']);
$routes->get('/dashboard', [TaskController::class, 'index'], ['filter' => Auth::class]);

# Auth routes
$routes->get('/login', [AuthController::class, 'login']);
$routes->get('/logout', [AuthController::class, 'logout']);
$routes->get('/register', [AuthController::class, 'register']);
$routes->get('/profile', [AuthController::class, 'profile'], ['filter' => Auth::class]);

/**
 * Task routes
 * 
 * @param RouteCollection $routes
 */
$routes->group('task', function ($routes) {
  $routes->get('add', [TaskController::class, 'add'],  ['filter' => Auth::class]);
  $routes->get('edit/(:num)', [TaskController::class, 'edit/$1'], ['filter' => Auth::class]);
  $routes->post('add', [TaskController::class, 'handle_add_task'], ['filter' => Auth::class]);
  $routes->post('edit/(:num)', [TaskController::class, 'handle_edit_task/$1'], ['filter' => Auth::class]);
  $routes->get('delete/(:num)', [TaskController::class, 'handle_delete_task/$1'], ['filter' => Auth::class]);
});

/**
 * Form submission routes
 * 
 * @param RouteCollection $routes
 */
$routes->group('auth', function ($routes) {
  $routes->post('login', [AuthController::class, 'handle_login']);
  $routes->post('register', [AuthController::class, 'handle_register']);
});
