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
Route::resource('reprecentantes','ReprecentantesController');
Route::resource('marcas','MarcasController');
Route::resource('facturas', 'FacturasController');

// Route::post('buscar','ProductosController@buscar')->name('productos.buscar');
Route::get('/mostrar','ProductosController@suma')->name('productos.suma');
Route::get('factura/{id}','FacturasController@mostrarProducto');
Route::post('buscar','FacturasController@buscar')->name('facturas.buscar');

// Route::get('/crear','FacturasController@crear')->name('facturas.crear');
Route::get('crear','FacturasController@crear')->name('facturas.crear');
Route::get('guardar','FacturasController@guardar')->name('facturas.guardar');
Route::get('suma','FacturasController@suma')->name('facturas.suma');





// Route::get('/','SearchController@index');
 
// Route::get('/search','SearchController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
