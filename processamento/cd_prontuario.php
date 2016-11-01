<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$dt_cadastro = $_POST["dt_cadastro"];
$paciente = $_POST["paciente"];



if (($dt_cadastro == "") && ($paciente == "")) {
    echo 'Preencha todos os campos!';
} else {
    $query1 = mysql_query("INSERT INTO prontuario VALUES ('', '$dt_cadastro', '$paciente')");
    
    header("Location: ../dentista/administrativo.php?link=1");
}
?>