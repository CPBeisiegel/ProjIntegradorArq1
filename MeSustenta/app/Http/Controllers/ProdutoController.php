<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produto');
    }

    public function create(Request $request){

         if($request->isMethod('GET')){
            return view('cadastroProduto');

        }

        $novoProduto = new Produto();
        $novoProduto->nome_produto = $request->nomeProduto;
        $novoProduto->tipo_produto = $request->tipoProduto;
        $novoProduto->codigo_do_produto = $request->codigoProduto;
        $novoProduto->codigo_categoria = $request->codigoCategoria;
        $novoProduto->quantidade_em_estoque = $request->quantidadeEstoque;
        $novoProduto->estoque_maximo = $request->estoqueMaximo;
        $novoProduto->descricao_prod = $request->descricao;
        $novoProduto->departamento = $request->departamento;
        $novoProduto->codigo_fornecedor = $request->codigoFornecedor;
        $novoProduto->nome_loja = $request->nomeloja;
        $novoProduto->preco_venda = $request->precoVenda;
        $novoProduto->produto_status = $request->statusProduto;
    
        $resultado = $novoProduto->save();

        return view('cadastroProduto',["resultado" => $resultado]);

    }



}
