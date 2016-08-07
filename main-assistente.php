<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/logo-logomarca-render.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>OdontoTech - Home</title>
        <!-- Location-->
        <link rel="stylesheet" href="css/main-admin.css">
        <link rel="stylesheet" href="css/main-hover.css">
        <!-- MDL Google -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <br>
            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Home</header>
                <!-- Expandable Textfield -->
                <div class="topo">
                    <!-- Left aligned menu below button -->
                    <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">more_vert</i> </button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                        <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Perfil</li>
                        <a href="sair.php">
                            <li class="mdl-menu__item">Sair</li>
                        </a>
                    </ul>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6"> <i class="material-icons">search</i> </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" id="sample6">
                            <a href="sair.php">
                                <label class="mdl-textfield__label" for="sample-expandable">Sair</label>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Início div menus -->
            <div class="row menus row-centered">
                <!-- Início div cadastrar -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal cadastrar" data-toggle="modal" data-target="#Modal-Usuario"> <img src="images/cadastrar-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src='images/cadastrar-render-onmouse.png'" onmouseout="this.src='images/cadastrar-render.png'"> </a>
                    <!-- Início Modal Usuário-->
                    <div class="modal fade" id="Modal-Usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Cadastrar</h4> </div>
                                <div class="modal-body">
                                    <div class="modal-container">
                                        <div class="row row-centered">
                                            <div class="col-md-12 col-centered text-center paciente">
                                                <a href="#m" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/cadastrar-paciente-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src='images/cadastrar-paciente-render-onmouse.png'" onmouseout="this.src='images/cadastrar-paciente-render.png'"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal Usuário-->
                </div>
                <!-- Fim div cadastrar -->
                <!-- Início div buscar -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#Modal-Buscar"><img src="images/buscar-render.png" class="buscar" alt="buscar" onmouseover="this.src='images/buscar-render-onmouse.png'" onmouseout="this.src='images/buscar-render.png'"></a>
                    <!-- Início Modal Buscar-->
                    <div class="modal fade" id="Modal-Buscar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Buscar</h4> </div>
                                <div class="modal-body">
                                    <div class="modal-container">
                                        <div class="row row-centered">
                                            <div class="col-md-12 col-centered text-center paciente">
                                                <a href="buscar-paciente.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/buscar-paciente-render.png" class="buscar" alt="buscar" onmouseover="this.src='images/buscar-paciente-render-onmouse.png'" onmouseout="this.src='images/buscar-paciente-render.png'"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal Buscar-->
                </div>
                <!-- Fim div buscar -->
                <!-- Início div agendar -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/agendar-render.png" class="agendar" alt="relatorio" onmouseover="this.src='images/agendar-render-onmouse.png'" onmouseout="this.src='images/agendar-render.png'"></a>
                </div>
                <!-- Fim div agendar -->
                <!-- Início div relatório -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#Modal-Relatorio"><img src="images/relatorio-render.png" class="relatorio" alt="relatorio" onmouseover="this.src='images/relatorio-render-onmouse.png'" onmouseout="this.src='images/relatorio-render.png'"></a>
                    <!-- Início Modal Buscar-->
                    <div class="modal fade" id="Modal-Relatorio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Buscar</h4> </div>
                                <div class="modal-body">
                                    <div class="modal-container">
                                        <div class="row row-centered">
                                            <div class="col-md-6 col-centered text-cemter">
                                                <a href="relatorio-paciente.php" class="hvr-shutter-out-horizontal relatorio"> <img src="images/relatorio-paciente-render.png" class="relatorio" alt="relatorio" onmouseover="this.src='images//relatorio-paciente-render-onmouse.png'" onmouseout="this.src='images/relatorio-paciente-render.png'"> </a>
                                            </div>
                                            <div class="col-md-6 col-centered text-center">
                                                <a href="relatorio-procedimento.php" class="hvr-shutter-out-horizontal relatorio"> <img src="images/relatorio-procedimento-render.png" class="relatorio" alt="relatorio" onmouseover="this.src='images/relatorio-procedimento-render-onmouse.png'" onmouseout="this.src='images/relatorio-procedimento-render.png'"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal Buscar-->
                </div>
                <!-- Fim div relatório -->
                <!-- Início div procedimento -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/procedimento-render.png" class="procedimento" alt="procedimento" onmouseover="this.src='images/procedimento-render-onmouse.png'" onmouseout="this.src='images/procedimento-render.png'"></a>
                </div>
                <!-- Fim div procedimento -->
            </div>
            <!-- Fim div menus -->
            <br>
            <div class="logoCanto row-centered"> <img src="images/logo-render.png" alt="logo"> </div>
            <br>
            <div class="menu"> </div>
            <br>
            <div class="rodape text-center"> © Copyright 2016-2020 <a href="#">OdontoTech</a> - Versão 1.0.0.0 </div>
        </div>
    </body>

    </html>