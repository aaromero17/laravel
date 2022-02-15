<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|ghg
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/home/{id}', 'Ejemplo3Controller@index');
  


Route::get('/', 'PaginasController@index');
Route::get('/index', 'PaginasController@index');
Route::get('/quienesSomos', 'PaginasController@quienesSomos');
Route::get('/dondeEstamos', 'PaginasController@dondeEstamos');
Route::get('/foros', 'PaginasController@foros');
*/

Route::resource("posts","Ejemplo3Controller");