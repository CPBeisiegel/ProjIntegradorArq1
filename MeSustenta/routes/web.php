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

Route::get('/teste', function() {
    return view('template');
});

Route::get('/principal',"PrincipalController@index");

Route::get('/cadastro','CadastroController@index');
Route::get('/contato','ContatoController@index');
Route::get('/sobre', 'SobreController@index');
Route::get('/produto', 'ProdutoController@index');
Route::get('/alimentos', 'AlimentosController@index');
Route::get('/departamentos','DepartamentoController@index');
Route::get('/carrinho', 'CarrinhoController@index');
Route::get('/pedido','PedidoController@index');

Route::get('/cadastroProduto','ProdutoController@create');
Route::post('/cadastroProduto', 'ProdutoController@create');


Route::get('/pedido','PedidoController@create');
Route::post('/pedido','PedidoController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
