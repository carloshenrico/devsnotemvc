<?php
use core\Router;

$router = new Router();

$router->get('/note', 'HomeController@getList'); // Listar as anotações

$router->get('/note/{id}', 'HomeController@get'); // Ler uma anotação

$router->post('/note', 'HomeController@add'); // Adicionar uma anotação

$router->put('/note/{id}', 'HomeController@update'); // Editar uma anotação

$router->delete('/note/{id}', 'HomeController@delete');

