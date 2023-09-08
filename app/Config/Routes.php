<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Profile', 'Home::profile');
$routes->get('/Profile_Url/(:any)/(:any)/(:any)', 'Home::profile_url/$1/$2/$3');
