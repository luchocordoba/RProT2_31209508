<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal_ultimo',  'Home::index');
$routes->get('quienes_somos',  'Home::quienes_somos');
$routes->get('acerca_de',  'Home::acerca_de');
$routes->get('login',  'Home::login');
$routes->get('registrarse',  'Home::registrarse');