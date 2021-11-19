<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\MoviesController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'/api'], function() use ($router) {
    $router->get('movies/', 'MoviesController@index');
    $router->post('movies/send','MoviesController@store');
    $router->put('movies/update/{id}', 'MoviesController@update');
    $router->delete('movies/del/{id}','MoviesController@delete');
    $router->get('movies/{id}','MoviesController@show');
});
