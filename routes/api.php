<?php

use App\Router;

Router::get('/users', 'UserController@index');
Router::get('/users/{id}', 'UserController@show');
Router::post('/users', 'UserController@store');
Router::put('/users/{id}', 'UserController@update');
Router::delete('/users/{id}', 'UserController@destroy');
