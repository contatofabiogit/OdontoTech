<!DOCTYPE html>

<?php
$getpesquisa = "SELECT* FROM paciente";
$getsql = mysql_query($getpesquisa);
?>

<html lang="pt-br">

    <head>

        <?php
        include_once '../padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Buscar Prontuário</title>
        <link rel="stylesheet" href="../css/main-hover.css">
        <link rel="stylesheet" href="../css/buscar_dentista.css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="../js/carrega-pesquisa.js"></script>
    </head>

    <body>
        <?php
        $resultado = mysql_query("SELECT a.*, b.nome FROM prontuario a INNER JOIN pessoa b ON a.paciente_id_paciente = b.id_pessoa");
        //$resultado = mysql_query("SELECT * FROM prontuario");
        $linhas = mysql_num_rows($resultado);
        
        ?>
        <div class="container">
            <br>

            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Buscar Prontuário</header>
                <?php
                include_once '../padroes/cabecalho_body.php';
                ?>
            </div>

            <form method="POST" action="">
                <div class="row">
                    <div class="mdl-layout__header-row">
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                             mdl-textfield--floating-label mdl-textfield--align-right">
                            <label class="mdl-button mdl-js-button mdl-button--icon "
                                   for="fixed-header-drawer-exp">
                                <i class="material-icons filho">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" name="pesquisar"
                                       id="fixed-header-drawer-exp" placeholder="Pesquisar..." size="25">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <br>

            <div class="table-responsive">
                <table class="table table-striped table-hover resultado">
                    <td>PDF</td>
                    <td>Id</td>
                    <td>Data de Cadastro</td>
                    <td>Nome</td>
                    <td>Opções</td>
                    <tbody>
                        <?php
                        while ($linhas = mysql_fetch_array($resultado)) {

                            echo '<tr>';
                            ?>
                        <td><input type="radio" value="<?php $linhas['id_prontuario'] ?>"></td>

                        <?php
                        echo '<td>' . $linhas['id_prontuario'] . '</td>';
                        echo '<td>' . $linhas['dt_cadastro'] . '</td>';
                        echo '<td>' . $linhas['nome'] . '</td>';
                        
                        ?>
                        <td>
                            <a href="administrativo.php?link=23&id=<?php echo $linhas['id_prontuario']; ?>">
                                <button type="button" class="btn btn-sm btn-primary">Visualizar</button>
                            </a>
                            <a href="administrativo.php?link=21&id=<?php echo $linhas['id_prontuario']; ?>">
                                <button type="button" class="btn btn-sm btn-warning">Editar</button>
                            </a>
                            <a href="../processamento/apg_prontuario.php?id=<?php echo $linhas['id_prontuario']; ?>">
                                <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                            </a>
                        </td>
                        <?php
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="homePrincipal col-md-12 text-center ">
                    <a href="administrativo.php?link=1" class="hvr-grow-shadow">
                        <img src="../images/botao-home-render.png" class="home">
                        <br>
                        <label name="home">Home</label>
                    </a>
                </div>
            </div>

            <?php
            include_once '../padroes/rodape_body.php';
            ?>
        </div>
    </body>

</html>