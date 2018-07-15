<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);

$router->get('/boards', [
    'as'   => 'get_boards_page',
    'uses' => 'Controller@viewBoards',
]);

$router->get('/members', [
    'as'   => 'get_members_page',
    'uses' => 'Controller@viewMembers',
]);


$router->get('/login', [
    'as'   => 'get_members_page',
    'uses' => 'Controller@login',
]);