<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/user', function() use ($app) {
    // $results = app('db')->select('SELECT * FROM users');
    // $results = DB::select('SELECT * FROM users');
    echo '<pre>';
    print_r(get_class_methods($app));
    return 'debug';
});
