<?php

use App\Controllers\TaskController;
use App\Controllers\DashboardController;
use App\Controllers\AuthController;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'home']);
$routes->get('/home', [Home::class, 'home']);
$routes->get('/dashboard', [DashboardController::class, 'index']);

# Auth routes
$routes->get('/login', [AuthController::class, 'login']);
$routes->get('/register', [AuthController::class, 'register']);
$routes->get('/profile', [AuthController::class, 'profile']);

# Task routes
$routes->get('/task/add', [TaskController::class, 'add']);
