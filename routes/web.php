<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@index')->name('login');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@validateLogin');


/* USERS */
// Show all users
Route::get('/users','UserController@index');

// Add a new user
Route::get('/users/new', 'UserController@create');

// Store the new user
Route::post('/users','UserController@store');

// Show an user
Route::get('/users/{id}','UserController@show');

// Update an user
Route::post('users/{id}', 'UserController@update');

// Edit an user
Route::get('/users/edit/{id}','UserController@edit');

// Delete an user
Route::get('/users/delete/{id}','UserController@destroy');
