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

Route::get('/project/showall', 'ProjectController@showall');

Route::get('/project/showall/{id}', 'ProjectController@chooseProject');

Route::post('/project/contactus', 'ProjectController@contactUs');