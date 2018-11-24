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

Route::redirect('/', 'inicio');

Auth::routes();

//Web clientes
//Route::get('inicio', 'PublicController@initial')->name('initial');
Route::get('home', 'HomeController@index')->name('movimientos');
Route::get('movimientos', 'Web\MovimientoController@index')->name('movimientos');

//Públics
Route::get('about', function(){
  return View('about');
});
Route::get('single', function(){
  return View('single');
});
Route::get('inicio', function(){
  return View('index');
});
Route::get('signin', function(){
  return View('signin');
});
Route::get('logint', function(){
  return View('logint');
});
Route::get('servicios', function(){
  return View('about');
});
Route::get('pagos', function(){
  return View('about');
});

//Asdmin
Route::get('clientes', 'AdminController@clientes')->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
