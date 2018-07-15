<?php

/** @var Route $router */
$router->get('/boards', [
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);

$router->post('/boards/board',[
    'uses' => 'Controller@store'
]);

$router->get('/boards/view',[
    'uses' => 'Controller@showAll'
]);