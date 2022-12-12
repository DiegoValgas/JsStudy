<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');
Route::view('/prototypes', 'prototypes');
Route::view('/copiando-objeto', 'copiando-objeto');
Route::view('/criando-classe-por-funcao', 'criando-classe-por-funcao');
Route::view('/add-motodos-ao-prototype', 'add-motodos-ao-prototype');
Route::view('/criando-classe', 'criando-classe');
Route::view('/adicionando-propriedades-a-classe', 'adicionando-propriedades-a-classe');
Route::view('/symbol', 'symbol');
Route::view('/get-e-set', 'get-e-set');
Route::view('/heranca', 'heranca');
