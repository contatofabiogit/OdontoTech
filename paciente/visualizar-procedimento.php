<?php
$id = $_GET['id'];

$query1 = "SELECT * FROM pessoa WHERE id_pessoa='$id' LIMIT 1";

$query2 = "SELECT a.*, b.*, c.* FROM agenda a
            INNER JOIN procedimento b ON a.procedimento_id = b.id_procedimento
            INNER JOIN pessoa c ON a.dentista_id_dentista = c.id_pessoa
            WHERE pessoa_id_pessoa =  $id AND nivel_acesso = 'Dentista'";

$query3 = "SELECT * FROM agenda WHERE pessoa_id_pessoa = $id";

$consulta1 = $conectar->query($query1);
$resultado1 = $consulta1->fetch_assoc();

$consulta2 = $conectar->query($query2);
$resultado2 = $consulta2->fetch_assoc();

$consulta3 = $conectar->query($query3);
$resultado3 = $consulta2->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <?php
        include_once '../padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Visualizar Prontuário</title>
        <!-- Location-->
        <link rel="stylesheet" href="../css/main-admin.css">
        <link rel="stylesheet" href="../css/cadastrar-dentista.css">

    </head>

    <body>
        <div class="container">
            <br>
            <header>Sistema Odontológico - Visualizar Prontuário</header>
            <?php
            include_once '../padroes/cabecalho_body.php';
            ?>

            <br>            
            <div class="panel panel-primary">
                <table class="table table-hover table-striped">
                    <div class="panel-heading">Tabela de Agendamentos</div>

                    <div>Resultado: <strong><?php $linha = $resultado3->num_rows();?></strong></div>
                    <thead>
                        <tr class="info">
                            <th>Data</th>
                            <th>Procedimento</th>
                            <th>Dentista</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php
                        while ($linha = $resultado3->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $linha['data'] . '</td>';
                            echo '<td>' . $linha['tipo'] . '</td>';
                            echo '<td>' . $linha['nome'] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="homePrincipal col-md-6 col-md-offset-3 text-center ">
                    <a href="administrativo.php?link=1" class="hvr-grow-shadow"><img src="../images/botao-home-render.png" class="home">
                        <br>
                        <label name="home">Home</label>
                    </a>
                </div>
            </div>
        </div>

        <?php
        include_once '../padroes/rodape_body.php';
        ?>

    </div>
</body>

</html>