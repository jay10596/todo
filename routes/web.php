<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/// Todos
Route::get('/todos', 'TodoController@index');

Route::post('/todos', 'TodoController@store')->name('todo.create');

Route::get('/todos/{todo}', 'TodoController@destroy')->name('todo.delete');
/*Can't assign method Delere because in blade, methods are only assigned in forms.
For delete I'm using link which only takes a GET request*/

Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todo.edit');
Route::put('/todos/{todo}', 'TodoController@update')->name('todo.update');
///

// User
Route::get('/profile', 'UserController@index');

Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit');
Route::put('/users/{user}', 'UserController@update')->name('user.update');

Route::post('/upload', 'ImageController@upload')->name('avatar.upload');
///

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

