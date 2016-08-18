<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$nome = $_POST["nome"];
$cro = $_POST["cro"];
$especializacao = $_POST["especializacao"];
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

if (($nome == "") && ($cro == "") && ($especializacao == "") && ($login == "") &&
        ($senha == "") && ($telefone == "") && ($sexo == "") && ($rg == "") &&
        ($cpf == "") && ($dt_nascimeto == "") && ($email == "")) {
    echo 'Preencha todos os campos!';
} else if ($senha != $cSenha) {
    echo 'As senhas não estão iguais!';
} else {

    include './valida_cpf.php';

    if (validaCPF($cpf)) {
        $query1 = mysql_query("INSERT INTO pessoa VALUES ('', '$nome', '$login', '$senha', '$telefone', '$sexo', '$rg', '$cpf', '$dt_nascimeto', '$email', '$nivelacesso')");
        $query2 = mysql_query("INSERT INTO dentista VALUES ('', '$cro', '$especializacao', LAST_INSERT_ID())");

        header("Location: ../administrativo.php?link=3");
    } else {
        header("Location: ../administrativo.php?link=2");
    }
}
?>