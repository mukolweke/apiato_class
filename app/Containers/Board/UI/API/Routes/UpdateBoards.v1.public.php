<?php

/**
 * @apiGroup           Board
 * @apiName            updateBoards
 *
 * @api                {PATCH} /v1/boards/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('boards/{id}', [
    'as' => 'api_boards_update_boards',
    'uses'  => 'Controller@updateBoards',
    'middleware' => [
      'auth:api',
    ],
]);
