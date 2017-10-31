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

    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/grade', 'CadastroGradeController@index')->name('grade');

#seção salas abaixo \/\/\/

Route::get('/salas/cadastro', function () {

    return view('salas/cadastroSalas');
});


Route::get('/salas/listar', function () {
    return view('salas/listarSalas');});


#seção salas acima /\/\/\

Route::get('/bloco', 'BlocoController@index')->name('bloco');

Route::get('/rota', 'RotaController@index')->name('rota');
#seção cadastro de campus abaixo \/\/\/\/
Route::get('/campus/cadastro', function () {
    return view('/campus/cadastro');});


#seção cadastro de campus acima /\/\/\/\

Route::get('/localizasala', function () {
    return view('/localizasala');});
