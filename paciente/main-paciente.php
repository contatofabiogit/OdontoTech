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
                session_start();
                include_once '../proPaciente/conexao.php';
                $id = $_SESSION['pessoaId'];
                $query = "SELECT * FROM paciente WHERE pessoa_id_pessoa = $id";
                $consulta = $conectar->query($query);

                include_once '../padroes/cabecalho_body.php';
                ?>
            </div>
            <br>

            <!-- Início div menus -->
            <div class="row menus row-centered">

                <!-- Início div receita -->
                <div class="col-md-4 col-md-offset-1 text-center col-centered">
                    <a href="paciente.php?link=2&id=<?php echo $id; ?>" class="hvr-shutter-out-horizontal">
                        <img src="../images/prontuario-render.png" class="receita" alt="receita financeira" onmouseover="this.src = '../images/prontuario-render-onmouse.png'" onmouseout="this.src = '../images/prontuario-render.png'">
                    </a>
                </div>
                <!-- Fim div receita -->

                <!-- Início div agendar -->
                <div class="col-md-4 col-md-offset-2 text-center col-centered">
                    <a href="paciente.php?link=3&id=<?php echo $id; ?>" class="hvr-shutter-out-horizontal">
                        <img src="../images/visualiza- procedimento-render.png" class="agendar" alt="relatorio" onmouseover="this.src = '../images/visualiza- procedimento-render-onmouse.png'" onmouseout="this.src = '../images/visualiza- procedimento-render.png'">
                    </a>
                </div>
                <!-- Fim div agendar -->

            </div>
            <!-- Fim div menus -->

            <?php
            include_once '../padroes/rodape_body.php';
            ?>

        </div>
    </body>

</html>