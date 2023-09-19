<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/usuario/${id}', 'UsuariosController@getUser');
$router->get('/novo', 'UsuariosController@add');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

