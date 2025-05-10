<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pricelist', 'Pricelists::index');
$routes->get('about_us', 'About_Us::index');
$routes->get('projects', 'Projects::index');
$routes->post('projects/detail', 'Projects::detail');
$routes->get('services', 'Services::index');
$routes->post('services/detail', 'Services::detail');
$routes->get('services/detail/(:num)/(:segment)', 'Services::showDetail/$1/$2');
$routes->get('project', 'Projects::index');
$routes->get('news_room', 'News_room::index');
$routes->get('career', 'Career::index');