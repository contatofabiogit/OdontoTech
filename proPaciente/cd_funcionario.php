<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$cSenha = $_POST["csenha"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$dt_nascimeto = $_POST["dt_nascimento"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$nivelacesso = $_POST["nivelacesso"];

if (($nome == "") && ($login == "") && ($senha == "") && ($telefone == "") && ($sexo == "") && ($rg == "") && ($cpf == "") && ($dt_nascimeto == "") && ($email == "")) {
    echo 'Preencha todos os campos!';
} else if ($senha != $cSenha) {
    echo 'As senhas não estão iguais!';
} else {

    include '../processamento/valida_cpf.php';

    if (validaCPF($cpf)) {
        $query1 = mysql_query("INSERT INTO pessoa VALUES ('', '$nome', '$login', '$senha', '$email', '$rg', '$cpf', '$sexo', '$dt_nascimeto', '$telefone', '$nivelacesso')");

        header("Location: ../dentista/administrativo.php?link=11");
    } else {
        header("Location: ../dentista/administrativo.php?link=10");
    }
}
?>