<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';


$id = $_POST["id"];
$nome = $_POST["nome"];
$cro = $_POST["cro"];
$especializacao = $_POST["especializacao"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$dt_nascimeto = $_POST["dt_nascimento"];
$email = $_POST['email'];
$nivelacesso = $_POST['nivelacesso'];

$query1 = mysql_query("UPDATE pessoa SET nome = '$nome', login = '$login', senha = '$senha', telefone = '$telefone', sexo = '$sexo', rg = '$rg',"
        . "cpf = '$cpf', dt_nascimento = '$dt_nascimeto', email = '$email', nivel_acesso = '$nivelacesso' WHERE id_pessoa = '$id'");

$query2 = mysql_query("UPDATE dentista SET cro = '$cro', especializacao = '$especializacao' WHERE pessoa_id_pessoa = '$id'");
 
    header("Location: ../administrativo.php?link=3");
?>
