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


Route::resource('team', 'TeamController', ['only' => [
        'index', 'show'
]]);
Route::resource('matches', 'MatchController', ['only' => [
        'index'
]]);
Route::resource('points', 'PointController', ['only' => [
        'index'
]]);

Auth::routes();

Route::get('/', 'TeamController@index')->name('home');
