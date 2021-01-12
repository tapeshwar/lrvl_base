<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

//Auth::routes();

Route::post('projects/create', 'UsersController@store');
//Route::post('/user_login', 'UsersController@create');
//Route::post('login', 'UsersController@login');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/the/url', 'YourController@method');
