@extends('template')

@section('container')
<h1>Produtos Gerais</h1>
<ul>

@foreach ($todosProdutos as $produto)
    <li>{{$produto->nome_produto}} <a href="/produto/editar/{{$produto->idProduto}}">Editar</a></li>
    



@endforeach
</ul>



@endsection