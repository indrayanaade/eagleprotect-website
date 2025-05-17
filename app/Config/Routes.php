<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('test-db', 'TestDB::index');
$routes->get('pricelist', 'Pricelists::index');
$routes->get('about_us', 'About_Us::index');
$routes->get('contact_us', 'Contact_Us::index');
$routes->post('contact_us/submit', 'Contact_Us::submit');
$routes->get('projects', 'Projects::index');
$routes->post('projects/detail', 'Projects::detail');
$routes->get('projects/view/(:num)', 'Projects::view/$1');
$routes->get('services', 'Services::index');
$routes->post('services/detail', 'Services::detail');
$routes->get('services/detail/(:num)/(:segment)', 'Services::showDetail/$1/$2');
$routes->get('project', 'Projects::index');
$routes->get('news_room', 'News_room::index');
$routes->get('career', 'Career::index');