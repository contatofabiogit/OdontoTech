<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './conexao.php';

//recuperando os dados
$cursos = $_POST['palavra'];

$cursos = "SELECT * FROM pessoa WHERE nome LIKE '%$cursos%' AND nivel_acesso = 'Paciente'";

$resultado_paciente = mysql_query($cursos);

if (mysql_num_rows($resultado_paciente) <= 0) {
    echo 'Nenhum paciente encontrado...';
} else {
       
    $resultado = mysql_query("SELECT * FROM pessoa WHERE nivel_acesso = 'Paciente'");
    $linhas = mysql_num_rows($resultado);
    ?>
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
    <?php
}