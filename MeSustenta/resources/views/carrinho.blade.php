<!DOCTYPE html>
<html lang="br-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="topoContainer">
                <div id="logo">
                    <img src="img/logofinal1.png" alt="Logo MeSustenta">
                </div>
                <div id="navBar">
                    <a href="#">Fale Conosco</a>
                </div>
            </div>
        </header>
        <div id="passoContainer">
            <div id="car">
                <p>Carrinho</p>
            </div>
            <div id="entrega">
                <p>Dados da Entrega</p>
            </div>
            <div id="pago">
                <p>Pagamento</p>
            </div>
            <div id="conclusao">
                <p>Concluído</p>
            </div>
        </div>
        <div class="cabecalhoPage">
            <h1>Meu Carrinho</h1>
            <button type="submit" class="btn btn-outline-info">Fechar Pedido</button>
        </div>  
                
        <table id="tabelaCar">
            <tr>
                <thead>
                    <th colspan="3">Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th></th>
                </thead>
            </tr>
            <tbody>
                <tr>
                    <td colspan="3">
                        <img src="img/LaLoba/bolsaBordada.png" alt="bolsa">   
                        <p>Bolsa Bordada</p>
                        <p> Vendido por: La Loba</p>
                    </td>   
                    <td>R$ 0,00</td>
                    <td>
                        <i class="icon icon-minus-sign"></i>
                        <select name="quantProduto" id="quantProduto">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </td>  
                    <td>R$ 0,00</td>
                    <td>
                        <a dref="#">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div id="cupomDesconto">
            <a href="#">
                Adicionar cupom de desconto
            </a>
        </div>
        <div id="abreDesconto">
            <fieldset disabled="disabled">
                <p>Cupom Desconto</p>
                

            </fieldset>
        </div>
        <p>Sub-total</p>  
        <p>frete</p>
        <p>Total</p>
        <div>
                <button type="" class="btn btn-outline-info">Escolher mais produtos</button>
            </div>
        <div>
            <button type="submit" class="btn btn-outline-info">Fechar Pedido</button>
        </div>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>