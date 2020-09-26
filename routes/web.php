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

// Route Not Found
$router->get('/404', 'BlankPageController@index');

// Generate Key Application 
$router->get('/key', function () {
    return Str::random(32);
});

/**
 * Master Jenis
 */
$router->group(['prefix' => 'master-jenis', 'namespace' => 'MasterJenis'], function () use ($router) {
    // Jenis Lapak
    $router->get('/jenis-lapak', 'JenisLapakController@index');
    $router->get('/jenis-lapak/{id}', 'JenisLapakController@show');
    // Jenis Usaha 
    $router->get('/jenis-usaha', 'JenisUsahaController@index');
    $router->get('/jenis-usaha/{id}', 'JenisUsahaController@show');
});

/**
 * Master Pedagang
 */
$router->group(['prefix' => 'master-pedagang', 'namespace' => 'MasterPedagang'], function () use ($router) {
    // Pedagang
    $router->get('/pedagang', 'PedagangController@index');
    $router->get('/pedagang/{id}', 'PedagangController@show');
});

/**
 * Master Pedagang
 */
$router->group(['prefix' => 'master-pasar', 'namespace' => 'MasterPasar'], function () use ($router) {
    // Pasar
    $router->get('/pasar', 'PasarController@index');
    $router->get('/pasar/{id}', 'Pasarcontroller@show');
    // Pasar Kategori
    $router->get('/pasar-kategori', 'PasarKategoriController@index');
    $router->get('/pasar-kategori/{id}', 'PasarKategoriController@show');
});
