<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
| In the RouteServiceprovider.php there is a $router->pattern('id', '[0-9]+');

*/



Route::get('/', function () {
    return view('welcome');
});

    Route::post('oauth/access_token', function() {
        return Response::json(Authorizer::issueAccessToken());
    });

Route::get('client', 'ClientController@index');
Route::get('client/{id}', 'ClientController@show');
Route::put('client/{id}', 'ClientController@update');
Route::post('client', 'ClientController@store');
Route::delete('client/{id}', 'ClientController@destroy');

Route::get('project', 'ProjectController@index');
Route::get('project/{id}', 'ProjectController@show');
Route::put('project/{id}', 'ProjectController@update');
Route::post('project', 'ProjectController@store');
Route::delete('project/{id}', 'ProjectController@destroy');

Route::get('project/note', 'ProjectNoteController@index');
Route::get('project/note/{id}', 'ProjectNoteController@show');
Route::put('project/note/{id}', 'ProjectNoteController@update');
Route::post('project/note', 'ProjectNoteController@store');
Route::delete('project/{id}', 'ProjectNoteController@destroy');