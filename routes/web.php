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

Route::get('/create-project', function () {
    return view('createproject');
});
Route::get('/join-us', function () {
    return view('joinus');
});

Route::get('/home', 'Controller@index');

Route::get('/project/showall/{param}', 'ProjectController@showall');
Route::get('/users/showall/{param}', 'UsersController@showall');
Route::post('users/create/engineer', 'UsersController@createengineer');
Route::post('/project/contactus', 'ProjectController@contactUs');
