<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@index')->name('login');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@validateLogin');
Route::get('/landing', function() {
  return view('landing');
});

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

/* CATEGORIES */
// Show all categories
Route::get('/categories','CategoryController@index');

// Add a new category
Route::get('/categories/new', 'CategoryController@create');

// Store the new category
Route::post('/categories','CategoryController@store');

// Show a category
Route::get('/categories/{id}','CategoryController@show');

// Update a category
Route::post('categories/{id}', 'CategoryController@update');

// Edit a category
Route::get('/categories/edit/{id}','CategoryController@edit');

// Delete a category
Route::get('/categories/delete/{id}','CategoryController@destroy');