<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <?php
        include_once '../padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Buscar Dentista</title>
        <link rel="stylesheet" href="../css/main-hover.css">
        <link rel="stylesheet" href="../css/buscar_dentista.css">
    </head>

    <body>
        <?php
        $resultado = mysql_query("SELECT * FROM pessoa WHERE nivel_acesso = 'Dentista'");
        $linhas = mysql_num_rows($resultado);
        ?>
        <div class="container">
            <br>

            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Buscar Dentista</header>
                <?php
                include_once '../padroes/cabecalho_body.php';
                ?>
            </div>
            <br>
            <div class="table-responsive">
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
                            <a href="administrativo.php?link=5&id=<?php echo $linhas['id_pessoa']; ?>"><button type="button" class="btn btn-sm btn-primary">Visualizar</button></a>
                            <a href="administrativo.php?link=4&id=<?php echo $linhas['id_pessoa']; ?>" ><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
                            <a href="../processamento/apg_dentista.php?id=<?php echo $linhas['id_pessoa']; ?>"><button type="button" class="btn btn-sm btn-danger">Excluir</button></a> 
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