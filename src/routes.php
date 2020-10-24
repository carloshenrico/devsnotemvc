<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@getList'); // Listar as anotações

$router->get('/{id}', 'HomeController@get'); // Ler uma anotação

$router->post('/', 'HomeController@add'); // Adicionar uma anotação

$router->put('/a/{id}', 'HomeController@update'); // Editar uma anotação

$router->delete('/{id}', 'HomeController@delete');

