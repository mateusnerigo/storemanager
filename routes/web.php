<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    session(['current_user' => '']);
    return view('login');
});

Route::post('/login', 'UserController@validateLogin');

Route::resource('/users','UserController');