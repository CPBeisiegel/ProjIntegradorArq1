@extends('template')

@section('container')

<section class="container">

<div class="card cadastro-content col-md-8">
    <div class="cadastro-titulo">
        <h1>Formulário de Cadastro</h1>
    </div>

    <form id="form-cadastro">

        <!-- Informações de Pessoais de Cadastro -->
        <div class="form-group" >

            <div>
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome">
            </div>
            <div>
                <label>Sobrenome</label>
                <input type="text" class="form-control" placeholder="Sobrenome">
            </div>
            <div>
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" placeholder="Data de Nascimento">
            </div>
            <div>
                <label>RG</label>
                <input type="text" class="form-control" placeholder="RG">
            </div>
            <div>
                <label>CPF</label>
                <input type="text" class="form-control" placeholder="CPF">
            </div>

        </div>


        <!-- Informações Endereço -->
        <div class="form-group">

            <div>
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="end" placeholder="Endereço">
            </div>

            <div>
                <label for="numb">Número</label>
                <input type="number" class="form-control" placeholder="Número">
            </div>

            <div>
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro">
            </div>

            <div>
                <label for="estado">Estado</label>
                <input type="text" class="form-control" placeholder="Estado">
            </div>

            <div>
                <label for="cid">Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade">
            </div>

            <div>
                <label for="cep">CEP</label>
                <input type="number" class="form-control" placeholder="CEP">
            </div>

        </div>

        <!-- Informações de Login -->

        <div class="form-group" >

            <div>
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="nome@email.com">
            </div>

            <div>
                <label for="login">Nome de login</label>
                <input type="text" class="form-control" placeholder="Nome de Login">
            </div>

            <div>
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="pass" placeholder="senha">
            </div>

            <div>
                <label for="confirmapassword">Confirmar Senha</label>
                <input type="password" class="form-control" name="confipass" placeholder="confirmar senha">
            </div>

            <div class="btn12">
                <button id="bt_submit" type="submit" name='cadastro' class="btn btn-primary">Enviar</button>
                <input type="reset" value="Limpar" class="btn btn-primary">
            </div>
        </div>


    </form>
</div>

</section>


@endsection