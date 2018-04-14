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

Route::get('/', function () {
    return view('footer');
});

Route::get('/home', 'Controller@index');

Route::get('/project/showall/{param}', 'ProjectController@showall');
Route::get('/users/showall/{param}', 'UsersController@showall');

<<<<<<< HEAD
// Route::get('/project/showall/{id}', 'ProjectController@chooseProject');
=======
Route::get('/project/showall/{id}', 'ProjectController@chooseProject');

Route::post('/project/contactus', 'ProjectController@contactUs');
>>>>>>> 289364cfa5787cfabbe59001b2d0199ec7d502a4
