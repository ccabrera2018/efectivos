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





Route::get('/nuestra_empresa', function () {
    return view('home.nuestra_empresa');
});


Route::get('/servicios', function () {
    return view('home.servicios');
});

Route::get('/productos', function () {
    return view('home.productos');
});


Route::get('/informacion_plagas', function () {
    return view('home.informacion_plagas');
});

Route::resource('contactanos','ContactoController');





/*Route::get('/serviciosDetalle','ServiciosController@index');*/

/*ESTO LO PUSE PARA LOS SERVICIOS DETALLLES */

Route::get('/servicios/{id}', 'ServiciosController@show');





Route::get('/','HomeController@index');

















