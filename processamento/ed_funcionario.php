<?php

session_start();
include_once '../processamento/conexao.php';
include_once '../processamento/seguranca.php';


$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$dt_nascimeto = $_POST["dt_nascimento"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$nivelacesso = $_POST["nivelacesso"];

$sql = "SELECT id_pessoa FROM pessoa WHERE id_pessoa='$id'";


$query1 = mysql_query("UPDATE pessoa SET nome = '$nome', login = '$login', senha = '$senha', email = '$email', rg = '$rg', cpf = '$cpf',
        sexo = '$sexo', dt_nascimento = '$dt_nascimeto', telefone = '$telefone', nivel_acesso = '$nivelacesso' WHERE id_pessoa = '$id'");

header("Location: ../dentista/administrativo.php?link=11");
?>