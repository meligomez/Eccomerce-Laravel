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

//Home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// login, registro, olvidó su contraseña
Auth::routes();


//Rutas del header

Route::get('/aboutUs',function () {
    return view('aboutUs');
})->name('aboutUs');
Route::get('/buy')->name('buy');
Route::get('/edit/user')->name('editUser');

//Rutas del vehículo
Route::get('/vehicles', 'ProductController@index')->name('vehicles');
Route::get('/vehicles/{idVehiculo}','ProductController@detalleVehiculo');
Route::post('/vehicles','ProductController@agregarCarrito');

//rutas de editar perfil
Route::get('editarPerfil', 'UserController@visualizarPerfil')->name("editarPerfil");
Route::post('editarPerfil', 'UserController@editarPerfil')->name("editarPerfil");

//carrito
Route::get('/see-cart','CartController@verCarrito')->name('infoCarrito');
Route::post('/see-cart','CartController@eliminarProductoDelCarrito')->name('deleteProduct');

//compra
Route::post('/buy','PurchaseController@realizarVenta');
// Route::get('/buy','PurchaseController@verCompra');

//subir articulos
Route::get('/subirArticulos', function(){
    return view('subirArticulos');
  });
