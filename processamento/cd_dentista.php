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
$celular = $_POST["celular"];
$sexo = $_POST["sexo"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$dt_nascimeto = $_POST["dt_nascimento"];
$nivelacesso = $_POST["nivelacesso"];

if (($nome == "") && ($cro == "") && ($especializacao == "") && ($login == "") && ($senha == "") && ($telefone == "") && ($sexo == "") && ($rg == "") && ($cpf == "") && ($dt_nascimeto == "") && ($email == "")) {
    echo 'Preencha todos os campos!';
} else if ($senha != $cSenha) {
    echo 'As senhas não estão iguais!';
} else {

    include '../processamento/valida_cpf.php';

    if (validaCPF($cpf)) {
        $query1 = mysql_query("INSERT INTO pessoa VALUES ('', '$nome', '$login', '$senha', '$email', '$rg', '$cpf', '$sexo', '$dt_nascimeto', '$celular', '$nivelacesso')");
        $query2 = mysql_query("INSERT INTO dentista VALUES ('', '$cro', '$especializacao', LAST_INSERT_ID())");

        header("Location: ../dentista/administrativo.php?link=3");
    } else {
        header("Location: ../dentista/administrativo.php?link=2");
    }
}
?>