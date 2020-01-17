<?php

use Illuminate\Http\Request;


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

Route::get('/', 'WebsiteController@index');

Route::get('/products', 'ProductsController@index');
Route::get('/products/{id}', 'ProductsController@show');

Route::group(['prefix' => 'admin'], function () {
	Route::get('/products/add', 'ProductsController@create');
	Route::post('/products', 'ProductsController@store');
	Route::get('/products/{id}/edit', 'ProductsController@edit');
	Route::patch('/products/{id}', 'ProductsController@update');
	Route::delete('/products/{id}', 'ProductsController@destroy');
});

Route::group(['prefix' => 'customer'], function () {
	// panel del cliente
	// mis compras
	// mis datos de facturacion
	// mis tarjetas
	// mis direcciones
	// consultas
});













Route::get('/contact', function () {
	return 'aca se muestra el formulario de contacto';
});

Route::post('/contact', function () {
	return 'aca voy a recibir los datos del formulario para guardarlos en la db';
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


Route::get('/partials/products', function (Request $request) {
	$products = \App\Product::query();

	if ($request->has('title')) {
		$products->where('title', 'like', '%' . $request->get('title') . '%');
	}

	if ($request->has('price_min')) {
		$products->where('price', '>', $request->get('price_min'));
	}

	if ($request->has('price_max')) {
		$products->where('price', '<', $request->get('price_max'));
	}

	return view('partials/_products-list', [
		'products' => $products->orderBy('price')->paginate(5)
	]);
});
