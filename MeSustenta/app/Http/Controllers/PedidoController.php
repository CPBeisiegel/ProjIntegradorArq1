<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        return view('pedido');
    }

    public function create(Request $request){

         if($request->isMethod('GET')){
            return view('pedido');

        }

        $novoPedido = new Pedido();
        $novoPedido->pedidos_itens = $request->pedidoItens;
        $novoPedido->frete = $request->valorFrete;
        $novoPedido->dataDeEntrega = $request->dataEntrega;
        $novoPedido->nomeDestinatario = $request->nomeDestinatario;
        $novoPedido->codigoCliente = $request->emailCliente;
        $novoPedido->enderecoDestinatario = $request->enderecoDestinatario;
        $novoPedido->cidadeDestino = $request->cidadeDestino;
        $novoPedido->cepDestino = $request->cepDestino;
    
        $resultado = $novoPedido->save();

        return view('/pedido',["resultado" => $resultado]);

    }
}
