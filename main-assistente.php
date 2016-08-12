<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <?php
        include_once './padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Home</title>
        <link rel="stylesheet" href="css/main-hover.css">
        <link rel="stylesheet" href="css/buscar_dentista.css">

    </head>

    <body>
        <div class="container">
            <br>
            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Home</header>
                
                <?php
                include_once './padroes/cabecalho_body.php';
                ?>
                
            </div>
            <br>
            <!-- Início div menus -->
            <div class="row menus row-centered">
                <!-- Início div cadastrar -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal cadastrar" data-toggle="modal" data-target="#Modal-Usuario"> <img src="images/cadastrar-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = 'images/cadastrar-render-onmouse.png'" onmouseout="this.src = 'images/cadastrar-render.png'"> </a>
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
                                                <a href="#m" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/cadastrar-paciente-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = 'images/cadastrar-paciente-render-onmouse.png'" onmouseout="this.src = 'images/cadastrar-paciente-render.png'"> </a>
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
                    <a href="#" class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#Modal-Buscar"><img src="images/buscar-render.png" class="buscar" alt="buscar" onmouseover="this.src = 'images/buscar-render-onmouse.png'" onmouseout="this.src = 'images/buscar-render.png'"></a>
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
                                                <a href="buscar-paciente.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/buscar-paciente-render.png" class="buscar" alt="buscar" onmouseover="this.src = 'images/buscar-paciente-render-onmouse.png'" onmouseout="this.src = 'images/buscar-paciente-render.png'"> </a>
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
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/agendar-render.png" class="agendar" alt="relatorio" onmouseover="this.src = 'images/agendar-render-onmouse.png'" onmouseout="this.src = 'images/agendar-render.png'"></a>
                </div>
                <!-- Fim div agendar -->
                <!-- Início div relatório -->
                <div class="col-md-4 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#Modal-Relatorio"><img src="images/relatorio-render.png" class="relatorio" alt="relatorio" onmouseover="this.src = 'images/relatorio-render-onmouse.png'" onmouseout="this.src = 'images/relatorio-render.png'"></a>
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
                                                <a href="relatorio-paciente.php" class="hvr-shutter-out-horizontal relatorio"> <img src="images/relatorio-paciente-render.png" class="relatorio" alt="relatorio" onmouseover="this.src = 'images//relatorio-paciente-render-onmouse.png'" onmouseout="this.src = 'images/relatorio-paciente-render.png'"> </a>
                                            </div>
                                            <div class="col-md-6 col-centered text-center">
                                                <a href="relatorio-procedimento.php" class="hvr-shutter-out-horizontal relatorio"> <img src="images/relatorio-procedimento-render.png" class="relatorio" alt="relatorio" onmouseover="this.src = 'images/relatorio-procedimento-render-onmouse.png'" onmouseout="this.src = 'images/relatorio-procedimento-render.png'"> </a>
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
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/procedimento-render.png" class="procedimento" alt="procedimento" onmouseover="this.src = 'images/procedimento-render-onmouse.png'" onmouseout="this.src = 'images/procedimento-render.png'"></a>
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