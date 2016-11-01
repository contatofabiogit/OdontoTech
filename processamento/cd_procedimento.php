<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$tipo_procedimento = $_POST['tipo_procedimento'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];


if (($tipo_procedimento == "") && ($valor == "") && ($descricao == "")) {
    echo 'Preencha todos os campos!';
} else {


    $query1 = mysql_query("INSERT INTO procedimento VALUES ('', '$tipo_procedimento', '$valor', '$descricao')");
    
    header("Location: ../dentista/administrativo.php?link=19");
}
?>