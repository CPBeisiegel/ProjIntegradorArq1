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
Auth::routes(
    
);
Route::get('/sucessoTeste', 'Auth\LoginController@teste');
Route::get('/', function () {
    return view('template');
});

Route::get('/teste', function() {
    return view('welcome');
});

Route::get('/principal',"PrincipalController@index");


Route::get('/home',"PrincipalController@index");

Route::get('/cadastro','CadastroController@index');
Route::post('/cadastro', 'Auth\RegisterController@create');
Route::get('/contato','ContatoController@index');
Route::get('/sobre', 'SobreController@index');
Route::get('/produto', 'ProdutoController@index');
Route::get('/alimentos', 'AlimentosController@index');
Route::get('/departamentos','DepartamentoController@index');
Route::get('/carrinho', 'CarrinhoController@index');
Route::get('/pedido','PedidoController@index');
Route::get('/produtosGerais','ProdutoController@produtosgerais')->name('produtosGerais');

Route::get('/cadastroProduto','ProdutoController@create');
Route::post('/cadastroProduto', 'ProdutoController@create');

Route::get('/produto/editar/{id}',"ProdutoController@editar"); 
Route::post('/produto/editar/{id}',"ProdutoController@editar");


Route::get('/pedido','PedidoController@create');
Route::post('/pedido','PedidoController@create');

Route::get('/password','passwordController@index');


/* Logout */ Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
/* Editar Cadastro */ Route::get('/EditarCadastro','CadastroController@editar');

