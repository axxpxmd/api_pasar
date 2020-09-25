<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Str;

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

// Generate Key Application 
$router->get('/key', function () {
    return Str::random(32);
});

/**
 * Master Jenis
 */
$router->group(['prefix' => 'master-jenis'], function () use ($router) {
    // Jenis Lapak
    $router->get('/jenis-lapak', 'JenisLapakController@index');
    $router->get('/jenis-lapak/{id}', 'JenisLapakController@show');
});
