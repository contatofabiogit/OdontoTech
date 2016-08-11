<?php
session_start();
include_once("./processamento/seguranca.php");
include_once("./processamento/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>OdontoTech - Home</title>
        <?php
        include_once './padroes/cabecalho_head.php';
        ?>
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

                <!-- Início div usuários -->
                <div class="col-md-3 text-center col-centered">
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
                                            <div class="col-md-4 col-centered text-center dentista">
                                                <a href="administrativo.php?link=2" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/cadastrar-dentista-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = 'images/cadastrar-dentista-render-onmouse.png'" onmouseout="this.src = 'images/cadastrar-dentista-render.png'"> </a>
                                            </div>
                                            <div class="col-md-4 col-centered text-center paciente">
                                                <a href="#m" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/cadastrar-paciente-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = 'images/cadastrar-paciente-render-onmouse.png'" onmouseout="this.src = 'images/cadastrar-paciente-render.png'"> </a>
                                            </div>
                                            <div class="col-md-4 col-centered text-center funcionarios">
                                                <a href="#m" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/cadastrar-funcionarios-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = 'images/cadastrar-funcionarios-render-onmouse.png'" onmouseout="this.src = 'images/cadastrar-funcionarios-render.png'"> </a>
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
                <!-- Fim div usuário -->

                <!-- Início div buscar -->
                <div class="col-md-3 text-center col-centered">
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
                                            <div class="col-md-4 col-centered text-center dentista">
                                                <a href="administrativo.php?link=3" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/buscar-dentista-render.png" class="buscar" alt="buscar" onmouseover="this.src = 'images//buscar-dentista-render-onmouse.png'" onmouseout="this.src = 'images/buscar-dentista-render.png'"> </a>
                                            </div>
                                            <div class="col-md-4 col-centered text-center paciente">
                                                <a href="buscar-paciente.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/buscar-paciente-render.png" class="buscar" alt="buscar" onmouseover="this.src = 'images/buscar-paciente-render-onmouse.png'" onmouseout="this.src = 'images/buscar-paciente-render.png'"> </a>
                                            </div>
                                            <div class="col-md-4 col-centered text-center funcionarios">
                                                <a href="buscar-funcionarios.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/buscar-funcionarios-render.png" class="buscar" alt="buscar" onmouseover="this.src = 'images/buscar-funcionarios-render-onmouse.png'" onmouseout="this.src = 'images/buscar-funcionarios-render.png'"> </a>
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

                <!-- Início div receita -->
                <div class="col-md-3 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/receita-render.png" class="receita" alt="receita financeira" onmouseover="this.src = 'images/receita-render-onmouse.png'" onmouseout="this.src = 'images/receita-render.png'"></a>
                </div>
                <!-- Fim div receita -->

                <!-- Início div agendar -->
                <div class="col-md-3 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/agendar-render.png" class="agendar" alt="relatorio" onmouseover="this.src = 'images/agendar-render-onmouse.png'" onmouseout="this.src = 'images/agendar-render.png'"></a>
                </div>
                <!-- Fim div agendar -->

                <!-- Início div relatório -->
                <div class="col-md-3 text-center col-centered">
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
                                            <div class="col-md-4 col-centered text-center dentista">
                                                <a href="relatorio-paciente.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/relatorio-paciente-render.png" class="relatorio" alt="relatorio" onmouseover="this.src = 'images//relatorio-paciente-render-onmouse.png'" onmouseout="this.src = 'images/relatorio-paciente-render.png'"> </a>
                                            </div>
                                            <div class="col-md-4 col-centered text-center paciente">
                                                <a href="relatorio-procedimento.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/relatorio-procedimento-render.png" class="relatorio" alt="relatorio" onmouseover="this.src = 'images/relatorio-procedimento-render-onmouse.png'" onmouseout="this.src = 'images/relatorio-procedimento-render.png'"> </a>
                                            </div>
                                            <div class="col-md-4 col-centered text-center funcionarios">
                                                <a href="relatorio-receita.php" class="hvr-shutter-out-horizontal cadastrar"> <img src="images/relatorio-receita-render.png" class="relatorio" alt="relatorio" onmouseover="this.src = 'images/relatorio-receita-render-onmouse.png'" onmouseout="this.src = 'images/relatorio-receita-render.png'"> </a>
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
                <div class="col-md-3 text-center col-centered">
                    <a href="#" class="hvr-shutter-out-horizontal"><img src="images/procedimento-render.png" class="procedimento" alt="procedimento" onmouseover="this.src = 'images/procedimento-render-onmouse.png'" onmouseout="this.src = 'images/procedimento-render.png'"></a>
                </div>
                <!-- Fim div procedimento -->

            </div>
            <!-- Fim div menus -->

            <?php
            include_once './padroes/rodape_body.php';
            ?>

        </div>
    </body>

</html>