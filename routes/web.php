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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/plantilla', 'layouts.plantilla');
Route::view('/','index');
Route::view('/index','index');
Route::resource('categorias','CategoriasController');
Route::resource('productos','ProductosController');
Route::resource('vendedores','VendedoresController');
Route::resource('marcas','MarcasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
