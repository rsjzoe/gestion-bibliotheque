<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/a', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/inscription', 'Inscription::index');
$routes->post('/inscription', 'Inscription::create');

$routes->get('/books', 'BookController::index');
$routes->get('/books/create', 'BookController::create');
$routes->post('/books/create', 'BookController::store');
$routes->get('/books/edit/(:num)', 'BookController::edit/$1');
$routes->post('/books/update/(:num)', 'BookController::update/$1');
$routes->get('/books/delete/(:num)', 'BookController::delete/$1');

$routes->get('/authors', 'AuthorController::index');
$routes->get('/authors/create', 'AuthorController::create');
$routes->post('/authors/create', 'AuthorController::store');

$routes->get('/borrowings', 'BorrowingController::index');
$routes->get('/borrowings/create', 'BorrowingController::create');
$routes->post('/borrowings/create', 'BorrowingController::store');
$routes->get('/borrowings/return/(:num)', 'BorrowingController::return/$1');

