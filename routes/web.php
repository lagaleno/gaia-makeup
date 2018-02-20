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

Route::get('/contato', function () {
	return view('contato');
});

//Tirar essa rota
Route::get('/sucesso', function () {
	return view('sucesso');
});

Route::post('/contato', 'MensagemController@store')->name('entrarContato');

Route::get('/produtos', function () {
	return view('produtos'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
