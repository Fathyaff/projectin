<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing page
Route::get('/', 'PageController@index');

// Page to create project
Route::get('/create-project', 'PageController@createProject');

// Page to regis engineer
Route::get('/join-us', 'PageController@joinEngineer');

// return JSON project & users
Route::get('/project/showall/{param}', 'ProjectController@showall');
Route::get('/users/showall/{param}', 'UsersController@showall');
Route::post('/project/contactus', 'ProjectController@contactUs');

// Create Project
Route::post('/project/create', 'ProjectController@createProject');

// Join Engineer
Route::post('/users/create/engineer', 'UsersController@createEngineer');

// Apply Project
Route::post('/project/apply', 'ProjectController@chooseProject');

// Send Feedback
Route::post('/contact-us', 'PageController@sendFeedback');
