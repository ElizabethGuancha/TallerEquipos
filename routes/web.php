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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jugadores', function () {
    $jugadores = ['Guancha','Enrriques','Noguera','Taylor','Burbano','Mars','Lopez'];
    $posicion = ['Defensa Derecha','Portero','Delantero','Central','Lateral Derecho','Lateral Izquierdo','Defensa Izquierdo'];

    return view('plantilla1', [
        'jugadores' => $jugadores,
        'posicion' => $posicion
    ]);
 });

 Route::get('/equipos', function () {
    $equipos = ['RM','L','C','P','A','Pasto','Cali']; 
    

    return view('plantilla2', [
        'equipos' => $equipos
        ]);
 });
