<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/About', 'Page::About');
$routes->get('/Contact', 'Page::Contact');
$routes->get('/Faqs', 'Page::Faqs');
