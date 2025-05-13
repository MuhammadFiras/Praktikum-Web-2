<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');   // Route for Home page
$routes->get('/profile', 'ProfileController::index');  // Route for Profile page

