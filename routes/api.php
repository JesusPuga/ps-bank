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

Route::post('/example', 'PublicController@example');
Route::post('/getExisitsCuentaId', 'PublicController@getExisitsCuentaId');
Route::post('/payment', 'PublicController@makePayment');
Route::get('/usuarioMovimientos', 'PublicController@usuarioMovimientos');

//Admin
Route::get('/getClientes', 'PublicController@getClientes');
