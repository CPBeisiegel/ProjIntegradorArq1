@extends('template')

@section('container')

<section class="container">

<div class="card cadastro-content col-md-8">
    <div class="cadastro-titulo">
        <h1>Formulário de Cadastro</h1>
    </div>

    <form id="form-cadastro" method="POST" action="/cadastro">
    @csrf
        <!-- Informações de Pessoais de Cadastro -->
        <div class="form-group" >

            <div>
                <label>Nome</label>
                <input type="text" class="form-control casds" name="name" placeholder="Nome">
            </div>
            <div>
                <label>Sobrenome</label>
                <input type="text" class="form-control casds" name="lastName" placeholder="Sobrenome">
            </div>         

        </div>
    </form>    


    <form method="POST"action="/cadastro">
        <!-- Informações Endereço -->
        <div class="form-group">

            <div>
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control casds" id="end" name='endereco' placeholder="Endereço">
            </div>

            <div>
                <label for="numb">Número</label>
                <input type="number" class="form-control casds" name='num_end' placeholder="Número">
            </div>

            <div>
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control casds" name='bairro' placeholder="Bairro">
            </div>

            <div>
                <label for="estado">Estado</label>
                <input type="text" class="form-control casds" name='uf' placeholder="Estado">
            </div>

            <div>
                <label for="cid">Cidade</label>
                <input type="text" class="form-control casds" name='cidade' placeholder="Cidade">
            </div>

            <div>
                <label for="cep">CEP</label>
                <input type="number" class="form-control casds" name='cep' placeholder="CEP">
            </div>

        </div>

    </form>    

    <form method="POST"  action="/cadastro">
        <!-- Informações de Login -->

        <div class="form-group" >

            <div>
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control casds" id="exampleFormControlInput1" name="email"
                    placeholder="nome@email.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div>
                <label for="password">Senha</label>
                <input type="password" class="form-control casds" name="password" placeholder="senha">
            </div>

            <div>
                <label for="confirmapassword">Confirmar Senha</label>
                <input type="password" class="form-control casds" name="confipass" placeholder="confirmar senha">
            </div>

            <div class="btn12">
                <button id="bt_submit" type="submit" name='cadastro' class="btn btn-primary btn-casds">Enviar</button>
                <input type="reset" value="Limpar" class="btn btn-primary">
            </div>
        </div>


    </form>
</div>

</section>

<script src="{{asset('js/cadastro.js')}}"></script>
@endsection