<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pricelist', 'Pricelists::index');
$routes->get('about_us', 'About_us::index');
$routes->get('services', 'Services::index');
$routes->get('project', 'Projects::index');
$routes->get('news_room', 'News_room::index');
$routes->get('career', 'Career::index');