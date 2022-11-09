<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

use App\Http\Controllers\PerformanceController;

  



$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/test', function () use ($router) {
    return view('test');
});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});



use Laravel\Lumen\Routing\Router;

// $router->get('/', function () use ($router) {

//     return $router->app->version();
// });


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('performance', ['uses' => 'PerformanceController@index']);


    $router->post('insertData', ['uses' => 'PerformanceController@create']);

 
});
