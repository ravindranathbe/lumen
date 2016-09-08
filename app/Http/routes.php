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
    return 'Hello User!';
});

// $app->get('api/blog', 'BlogController@index');
$app->group(['middleware' => 'auth'], function () use ($app) {
    $app->get('api/blog', 'App\Http\Controllers\BlogController@index');
});

$app->get('api/blog/{id}', 'BlogController@getBlog');
$app->post('api/blog', 'BlogController@saveBlog');
$app->put('api/blog/{id}', 'BlogController@updateBlog');
$app->delete('api/blog/{id}', 'BlogController@deleteBlog');
