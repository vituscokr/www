<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

use App\Controllers\Pages;
use App\Controllers\News;

$routes->get('/', 'Home::index');
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']);
$routes->get('news', [News::class, 'index']); 
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
