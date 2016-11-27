<?php
$id = $_GET['id'];

//Executando consulta sql
$result1 = mysql_query("SELECT * FROM pessoa WHERE id_pessoa='$id' LIMIT 1");
//$result2 = mysql_query("SELECT * FROM prontuario WHERE paciente_id_paciente ='$id' LIMIT 1");
$result2 = mysql_query("SELECT a.*, b.nome FROM prontuario a INNER JOIN pessoa b ON a.paciente_id_paciente = b.id_pessoa WHERE paciente_id_paciente = '$id' LIMIT 1");

$resultado1 = mysql_fetch_assoc($result1);
$resultado2 = mysql_fetch_assoc($result2);
?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <?php
        include_once '../padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Editar Prontuário</title>
        <!-- Location-->
        <link rel="stylesheet" href="../css/main-admin.css">
        <link rel="stylesheet" href="../css/cadastrar-dentista.css">

    </head>

    <body>
        <div class="container">
            <br>
            <header>Sistema Odontológico - Editar Prontuário</header>
            <?php
            include_once '../padroes/cabecalho_body.php';
            ?>

            <br>            
            <div class="panel panel-primary">
                <table class="table table-hover table-striped">
                    <div class="panel-heading">Tabela de Agendamentos</div>

                    <?php
                    $i = $_GET['id_paciente'];
                    $cont_linha = mysql_query("SELECT * FROM agenda WHERE pessoa_id_pessoa = $i");
                    ?>
                    <div>Resultado: <strong><?php echo mysql_num_rows($cont_linha); ?></strong></div>
                    <thead>
                        <tr class="info">
                            <th>Data</th>
                            <th>Procedimento</th>
                            <th>Dentista</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php
                        $con_query = mysql_query("SELECT a.*, b.*, c.* FROM agenda a
                                                      INNER JOIN procedimento b ON a.procedimento_id = b.id_procedimento
                                                      INNER JOIN pessoa c ON a.dentista_id_dentista = c.id_pessoa
                                                      WHERE pessoa_id_pessoa =  $i AND nivel_acesso = 'Dentista'");
                        while ($mostra_campos = mysql_fetch_array($con_query)) {
                            echo '<tr>';
                            echo '<td>' . $mostra_campos['data'] . '</td>';
                            echo '<td>' . $mostra_campos['tipo'] . '</td>';
                            echo '<td>' . $mostra_campos['nome'] . '</td>';
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