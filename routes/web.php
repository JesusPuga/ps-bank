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
use App\Movimiento;
use App\Http\Resources\Movimientos as MovimientoResource;

Route::redirect('/', 'inicio');

Auth::routes();

//web
Route::get('inicio', 'PublicController@initial')->name('initial');
Route::get('home', 'HomeController@index')->name('movimientos');
Route::get('movimientos', 'Web\MovimientoController@index')->name('movimientos');
Route::get('about', function(){
  return View('about');
});

Route::get('usuarioMovsimientos', 'Web\MovimientoController@usuarioMovimientos')->name('usuarioMovimientos');
//admin
