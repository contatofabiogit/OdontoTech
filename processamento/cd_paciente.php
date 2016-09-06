<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

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

if (($nome == "") && ($cro == "") && ($especializacao == "") && ($login == "") &&
        ($senha == "") && ($telefone == "") && ($sexo == "") && ($rg == "") &&
        ($cpf == "") && ($dt_nascimeto == "") && ($email == "") && ($nivelacesso == "")
        && ($nacionalidade == "") && ($est_civil == "") && ($celular == "") && ($local_nascimento == "")
        && ($nome_responsavel == "") && ($tel_responsavel == "") && ($profissao == "") && ($endereco == "")
        && ($bairro == "") && ($complemento == "") && ($estado == "") && ($cidade == "") && ($numero == "")) {
    echo 'Preencha todos os campos!';
} else if ($senha != $cSenha) {
    echo 'As senhas não estão iguais!';
} else {

    include '../processamento/valida_cpf.php';

    if (validaCPF($cpf)) {
        $query1 = mysql_query("INSERT INTO pessoa VALUES ('', '$nome', '$login', '$senha', '$email', '$rg', '$cpf', '$sexo', '$dt_nascimeto', '$celular', '$nivelacesso')");
        $query2 = mysql_query("INSERT INTO paciente VALUES ('', '$nacionalidade', '$est_civil', '$dt_nascimeto', '$local_nascimento', '$celular', '$profissao', '$nome_responsavel',
                '$tel_responsavel', '$endereco', '$bairro', '$complemento', '$cidade', '$estado', '$telefone', '$numero', LAST_INSERT_ID())");

        header("Location: ../dentista/administrativo.php?link=8");
    } else {
        header("Location: ../dentista/administrativo.php?link=6");
    }
}
?>