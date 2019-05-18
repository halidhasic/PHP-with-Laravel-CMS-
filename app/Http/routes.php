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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// we can create route group to group our controller here
// here we must think/consider what kind of routes do we want for the admin
// something like public/admin/users or public/author/posts
Route::resource('admin/users', 'AdminUsersController');