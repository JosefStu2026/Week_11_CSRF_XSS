<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('guestbook', 'GuestbookController::index');
$routes->post('guestbook/create', 'GuestbookController::create');
$routes->get('guestbook/edit/(:num)', 'GuestbookController::edit/$1');
$routes->post('guestbook/update/(:num)', 'GuestbookController::update/$1');
