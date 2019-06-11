<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Latest updates and statistic charts">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Latest updates and statistic charts">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/carrosselHome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/home2.css">
    <title>Home</title>
</head>
<body>
    <header>
        <section id="containerNav" class="nav d-flex container-fluid">
            <nav id="navTopo" class="row">
                <div id="containerSearch" class="justify-content-around col-4">
                    <form action="" method="GET">
                        <input type="search" name="buscah" size="24" placeholder="  O que você está procurando">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div id="containerMeio" class="col-3 d-flex justify-content-center align-items-center">
                    <a href="home.html"><img src="img/logofinal1.png" alt="Logo MeSustenta"></a>
                </div>
                <div class="row d-flex justify-content-around col-4">
                    <div id="divRightLineTwo" class="col-5">
                        <!-- Botão para acionar modal -->
                        <button id="buttonLogin" type="button" class="btn btn-outline-info col-12" data-toggle="modal"
                            data-target="#ExemploModalCentralizado">
                            <i class="fa fa-user" style="font-size:1.3em;color:#4fc4be"></i> Olá, faça seu login!
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
                        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-flex justify-content-center align-items-center"
                                    style="background-color:#041847">
                                    <img src="img/iconLogoFinal.png">
                                    <h5 class="modal-title" id="TituloModalCentralizado" style="color: #4fc4be">Login
                                    </h5>
                                    <button type="button" class="close btn btn-info" data-dismiss="modal"
                                        aria-label="Fechar">
                                        <span aria-hidden="true" style="color: #4fc4be">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="POST">
                                        <label>e-mail</label>
                                        <input type="e-mail"><br>
                                        <label>Senha</label>
                                        <input type="password"> <i class="fa fa-eye-slash" style="font-size: 1.4em"></i>
                                    </form>
                                </div>
                                <div class="modal-footer" style="background-color:#041847">
                                    <button type="submit" formaction="/cadastro.html"
                                        class="btn btn-outline-info btn-primary">Cadastre-se</button>
                                    <button type="submit" class="btn btn-outline-info btn-primary">Login</button>
                                    <!--   <button type="text" class="btn btn-secondary btn-info" data-dismiss="modal">Fechar</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cadastrar" class="d-flex align-items-center col-4">
                        <a id="addLogin" href="cadastro.html" style="font-size:0.8em;color:#4fc4be">
                            <i class="fa fa-user-plus" style="font-size:1.3em;color:#4fc4be"></i>
                            Cadastre-se
                        </a>
                    </div>
                    <div>
                        <a href="#"><img src="img/iconeCarP.png" alt=""></a>
                    </div>
                </div>    
            </nav>
            <nav id="navBase" class="container-fluid">
                <div id="menuBase">
                    <!--  Comeco menu de Produtor-->
                    <li id="listaLojas" class="navbar-item dropdown">
<!-- Menu Hamburguer--> <a href="#">☰</a>
                        <a class="nav-link dropdown-toggle botao-busca tituloMenu" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Lojas</a>
                        <div class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="#">BIOZ</a>
                            <a class="dropdown-item subTitulo" href="AlimentosPage.html">RAIZS</a>
                            <a class="dropdown-item subTitulo" href="#">VIVA AMAZON</a>
                        </div>
                    </li>
                    <!--    Final menu de Produtor-->
                    <!--   Comeco menu de Departamentos -->
                    <li id="listaDepartamentos" class="navbar-item dropdown">
                        <a class="nav-link dropdown-toggle botao-busca tituloMenu" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Departamentos</a>
                        <div class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="pageDepartamentos.html">Alimentos</a>
                            <a class="dropdown-item subTitulo" href="#">Beleza</a>
                            <a class="dropdown-item subTitulo" href="#">Casa</a>
                            <a class="dropdown-item subTitulo" href="#">Moda</a>
                        </div>
                    </li>
                    <!--   Final menu de Departamentos -->
                    <li><a class="tituloMenu" href="sobre.html">Quem Somos</a></li>
                    <li><a class="tituloMenu" href="contato.html">Contato</a></li>
                </div>
            </nav>
        </section>
    </header>
</body>
</html>    