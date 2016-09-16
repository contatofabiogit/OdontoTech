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

        <title>OdontoTech - Buscar Dentista</title>
        <link rel="stylesheet" href="../css/main-hover.css">
        <link rel="stylesheet" href="../css/buscar_dentista.css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="../js/carrega-pesquisa.js"></script>
    </head>

    <body>
        <?php
        $resultado = mysql_query("SELECT * FROM pessoa WHERE nivel_acesso = 'Paciente'");
        $linhas = mysql_num_rows($resultado);
        ?>
        <div class="container">
            <br>

            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Buscar Paciente</header>
                <?php
                include_once '../padroes/cabecalho_body.php';
                ?>
            </div>

            <form method="post" action="">
                <div class="row">
                    <div class="mdl-layout__header-row">
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                             mdl-textfield--floating-label mdl-textfield--align-right">
                            <label class="mdl-button mdl-js-button mdl-button--icon "
                                   for="fixed-header-drawer-exp">
                                <i class="material-icons">search</i>
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
            
            <div class="table-responsive resultado">
                <table class="table table-striped table-hover">
                    <td>Id</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Opções</td>
                    <tbody>
                        <?php
                        while ($linhas = mysql_fetch_array($resultado)) {

                            echo '<tr>';
                            echo '<td>' . $linhas['id_pessoa'] . '</td>';
                            echo '<td>' . $linhas['nome'] . '</td>';
                            echo '<td>' . $linhas['email'] . '</td>';
                            ?>
                        <td>
                            <a href="administrativo.php?link=7&id=<?php echo $linhas['id_pessoa']; ?>"><button type="button" class="btn btn-sm btn-primary">Visualizar</button></a>
                            <a href="administrativo.php?link=9&id=<?php echo $linhas['id_pessoa']; ?>" ><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
                            <a href="../processamento/apg_paciente.php?id=<?php echo $linhas['id_pessoa']; ?>"><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
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