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

Route::get('/', ['as' => '/', 'uses' => 'Controller@index']);
Route::get('{categoria?}/tour-actividades', ['as' => 'infoCategorias', 'uses' => 'Controller@categorias']);

//rutas vue
// tours
Route::get('/tours/{categoria?}', ['as' => 'categoriaTour', 'uses' => 'ToursController@categoriaTour']);
// Route::resource('tours', 'ToursController');
