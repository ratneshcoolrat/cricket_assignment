<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('team', 'Api\TeamController', ['only' => [
        'index', 'show'
]]);
Route::resource('matches', 'Api\MatchController', ['only' => [
        'index'
]]);
Route::resource('points', 'Api\PointController', ['only' => [
        'index'
]]);