<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$cSenha = $_POST["csenha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$dt_nascimeto = $_POST["dt_nascimento"];
$email = $_POST["email"];
$nivelacesso = $_POST["nivelacesso"];
$nacionalidade = $_POST["nacionalidade"];
$est_civil = $_POST["est_civil"];
$celular = $_POST["celular"];
$local_nascimento = $_POST["local_nascimento"];
$nome_responsavel = $_POST["nome_responsavel"];
$tel_responsavel = $_POST["tel_responsavel"];
$profissao = $_POST["profissao"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$complemento = $_POST["complemento"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$numero = $_POST["numero"];

$sql = "SELECT id_pessoa FROM pessoa WHERE id_pessoa='$id'";

$query1 = mysql_query("UPDATE pessoa SET nome = '$nome', login = '$login', senha = '$senha', email = '$email', rg = '$rg', cpf = '$cpf',
        sexo = '$sexo', dt_nascimento = '$dt_nascimento', telefone = '$telefone', nivel_acesso = '$nivelacesso' WHERE id_pessoa = '$id'");

$query2 = mysql_query("UPDATE paciente SET nacionalidade = '$nacionalidade', est_civil = '$est_civil',
        local_nascimento = '$local_nascimento', celular = '$celular', profissao = '$profissao', nome_responsavel = '$nome_responsavel',
        tel_responsavel = '$tel_responsavel', endereco = '$endereco', bairro = '$bairro', complemento = '$complemento', cidade = '$cidade',
        estado = '$estado', numero = '$numero' WHERE pessoa_id_pessoa = '$id'");

header("Location: ../dentista/administrativo.php?link=8");
?>