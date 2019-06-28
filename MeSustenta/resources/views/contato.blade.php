@extends('template')

@section('container')

 <!-- formulario para contato  -->
 <section class="container romd1">
        <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 romd">

            <div class="contato-content col-12 col-sm-10">
                <div class="contato-titulo">
                    <h1 id="contatonome" href="contato.html">Contato</h1>
                </div>
                <form id="form-contato">
                    <div class="form-row">
                            <label>Nome Completo(obrigatório)</label>
                            <input type="text" class="form-control" placeholder="nome sobrenome">
                    </div>

                    <div class="form-row">
                        <label for="exampleFormControlInput1">Seu Email (obrigatório)</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                    </div>

                    <div class="form-row">
                        <label for="exampleFormControlTextarea1">Assunto</label>
                        <input type="text" class="form-control" id="exampleFormControlTextarea1"></input>
                    </div>
                    <div class="form-row">
                        <label for="exampleFormControlTextarea1">Sua Mensagem</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                    </div>

                    <div class="botao">
                        <button id="bt_submit" type="submit" name='cadastro' class="btn btn-primary">Enviar</button>
                        <input type="reset" value="Limpar" class="btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
    


@endsection