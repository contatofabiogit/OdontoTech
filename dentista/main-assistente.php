<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>OdontoTech - Home</title>
        <?php
        include_once '../padroes/cabecalho_head.php';
        ?>
    </head>

    <body>
        <div class="container">
            <br>
            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Home</header>            

                <?php
                include_once '../padroes/cabecalho_body.php';
                ?>
            </div>
            <br>

            <!-- Início div menus -->
            <div class="row menus row-centered">

                <!-- Início div prontuário -->
                <div class="col-md-12 text-center col-centered">
                    <a class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#Modal-Prontuario"><img src="../images/cadastrar-prontuario-render.png" class="procedimento" alt="procedimento" onmouseover="this.src = '../images/cadastrar-prontuario-render-onmouse.png'" onmouseout="this.src = '../images/cadastrar-prontuario-render.png'"> </a>

                        <!-- Início div prontuário -->
                <div class="col-md-3 text-center col-centered">
                    <a class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#Modal-Prontuario"><img src="../images/prontuario-render.png" class="procedimento" alt="procedimento" onmouseover="this.src = '../images/prontuario-render-onmouse.png'" onmouseout="this.src = '../images/prontuario-render.png'"> </a>

                        <!-- Início Modal Usuário-->
                        <div class="modal fade" id="Modal-Prontuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Cadastrar</h4> </div>
                                    <div class="modal-body">
                                        <div class="modal-container">
                                            <div class="row row-centered">
                                                <div class="col-md-6 col-centered text-center dentista">
                                                    <a href="administrativo.php?link=20" class="hvr-shutter-out-horizontal cadastrar"> <img src="../images/cadastrar-prontuario-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = '../images/cadastrar-prontuario-render-onmouse.png'" onmouseout="this.src = '../images/cadastrar-prontuario-render.png'"> </a>
                                                </div>
                                                <div class="col-md-6 col-centered text-center paciente">
                                                    <a href="administrativo.php?link=22" class="hvr-shutter-out-horizontal cadastrar"> <img src="../images/buscar-prontuario-render.png" class="cadastrar" alt="cadastrar" onmouseover="this.src = '../images/buscar-prontuario-render-onmouse.png'" onmouseout="this.src = '../images/buscar-prontuario-render.png'"> </a>
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
                    </a>
                </div>
                <!-- Fim div prontuário -->

            </div>
            <!-- Fim div menus -->

            <?php
            include_once '../padroes/rodape_body.php';
            ?>

        </div>
    </body>

</html>