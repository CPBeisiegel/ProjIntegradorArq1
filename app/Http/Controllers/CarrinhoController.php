<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Produto;

class CarrinhoController extends Controller
{
    public function index(Request $request)
    {
            $produtos = Carrinho::all();
        return view('carrinho',['produtos'=>$produtos]);
    }


    public function exibir(Request $request){
        if($request->session()->has("carrinho")){
         
    
            $carrinho = $request->session()->get("carrinho");
        $produtos=[];

       foreach($carrinho as $item){
           $produtos[]= Produto::find($item['product_id']);
       }

        return view('carrinho',["produtos" => $produtos]);
        }

    }

    public function adicionar(Request $request, $id){
     
            if(!$request->session()->has("carrinho")){
                $request->session()->put('carrinho', [
                    [
                        'product_id'     => $id,
                        'qty'             => 1,
                    ] 
                ]);
            }
            
            
           $carrinho = $request->session()->get("carrinho");
           $carrinho[]= [
               "product_id" => $id,
               "qty" => 1
           ];

           $request->session()->put("carrinho",$carrinho);
    

    return redirect('/carrinho/exibir');   
    
    }

    // public function remover(Request $request){

    // }
}
