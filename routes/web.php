<?php

use Illuminate\Support\Facades\Route;

#region DoneRoutes
Route::get('/', 'LoginController@index')->name('login');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@validateLogin');
Route::get('/landing', function() {
  return view('landing');
});

// USERS
Route::prefix('users')->group(function() {
  // Show all users
  Route::get('','UserController@index');
  
  // Store the new user
  Route::post('','UserController@store');

  // Add a new user
  Route::get('new', 'UserController@create');
  
  // Show an user
  Route::get('{id}','UserController@show')->where('id', '[0-9]+');
  
  // Update an user
  Route::post('{id}', 'UserController@update')->where('id', '[0-9]+');
  
  // Edit an user
  Route::get('edit/{id}','UserController@edit')->where('id', '[0-9]+');
  
  // Delete an user
  Route::get('delete/{id}','UserController@destroy')->where('id', '[0-9]+');
});

// CATEGORIES
Route::prefix('categories')->group(function() {
  // Show all categories
  Route::get('','CategoryController@index');

  // Store the new category
  Route::post('','CategoryController@store');

  // Add a new category
  Route::get('new', 'CategoryController@create');
  
  // Show a category
  Route::get('{id}','CategoryController@show')->where('id', '[0-9]+');
  
  // Update a category
  Route::post('{id}', 'CategoryController@update')->where('id', '[0-9]+');
  
  // Edit a category
  Route::get('edit/{id}','CategoryController@edit')->where('id', '[0-9]+');
  
  // Delete a category
  Route::get('delete/{id}','CategoryController@destroy')->where('id', '[0-9]+');
});

// SUPPLIERS 
Route::prefix('suppliers')->group(function() {
  // Show all suppliers
  Route::get('','SupplierController@index');
  
  // Store the new supplier
  Route::post('','SupplierController@store');

  // Add a new supplier
  Route::get('new', 'SupplierController@create');
  
  // Show a supplier
  Route::get('{id}','SupplierController@show')->where('id', '[0-9]+');
  
  // Update a supplier
  Route::post('{id}', 'SupplierController@update')->where('id', '[0-9]+');
  
  // Edit a supplier
  Route::get('edit/{id}','SupplierController@edit')->where('id', '[0-9]+');
  
  // Delete a supplier
  Route::get('delete/{id}','SupplierController@destroy')->where('id', '[0-9]+');
});

// PRODUCTS 
Route::prefix('products')->group(function() {
  // Show all products
  Route::get('','ProductController@index');
  
  // Store the new Product
  Route::post('','ProductController@store');
  
  // Add a new Product
  Route::get('new', 'ProductController@create');
  
  // Show a Product
  Route::get('{id}','ProductController@show')->where('id', '[0-9]+');
  
  // Update a Product
  Route::post('{id}', 'ProductController@update')->where('id', '[0-9]+');
  
  // Edit a Product
  Route::get('edit/{id}','ProductController@edit')->where('id', '[0-9]+');
  
  // Delete a Product
  Route::get('delete/{id}','ProductController@destroy')->where('id', '[0-9]+');
});

// CLIENTS 
Route::prefix('clients')->group(function() {
  // Show all clients
  Route::get('','ClientController@index');
  
  // Store the new Client
  Route::post('','ClientController@store');
  
  // Add a new Client
  Route::get('new', 'ClientController@create');
  
  // Show a Client
  Route::get('{id}','ClientController@show')->where('id', '[0-9]+');
  
  // Update a Client
  Route::post('{id}', 'ClientController@update')->where('id', '[0-9]+');
  
  // Edit a Client
  Route::get('edit/{id}','ClientController@edit')->where('id', '[0-9]+');
  
  // Delete a Client
  Route::get('delete/{id}','ClientController@destroy')->where('id', '[0-9]+');
});
#endregion DoneRoutes

/* CASH MOVIMENT */
Route::prefix('cash_movement')->group(function() {
  // "index"
  Route::get('', 'CashMovementController@index');

  // buying route
  Route::get('buy', 'CashMovementController@buy');

  // selling route
  Route::get('sell', 'CashMovementController@sell');
});

