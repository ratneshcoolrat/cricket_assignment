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


Route::resource('/', 'TeamController');
Route::get('/matches', 'MatchController@index');
Route::resource('/points', 'PointController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
