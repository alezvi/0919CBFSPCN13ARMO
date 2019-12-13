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

// http://localhost:8000/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
	return 'aca se muestra el formulario de contacto';
});

Route::post('/contact', function () {
	return 'aca voy a recibir los datos del formulario para guardarlos en la db';
});

Route::get('/products', function () {
	return view('website.products.index');
});

Route::get('/cart', function () {
	return 'aca se muestra todo el detalle del carrito';
});

Route::post('/cart', function () {
	return 'recibo el producto que voy a agregar al carrito';
});

Route::get('/admin/products/create', function () {
	return 'aca se muestra el formulario para dar de alta un producto';
});

Route::post('/admin/products', function () {
	return 'recibo los datos del producto para guardar en la base de datos';
});











