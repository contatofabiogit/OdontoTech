<?php

ob_start();
if (($_SESSION['pessoaId'] == "") ||
        ($_SESSION['pessoaNome'] == "") ||
        ($_SESSION['pessoaLogin'] == "") ||
        ($_SESSION['pessoaSenha'] == "") ||
        ($_SESSION['pessoaNivelAcesso'] == "")) {

    unset($_SESSION['pessoaId'], $_SESSION['pessoaNome'], $_SESSION['pessoaLogin'], $_SESSION['pessoaSenha'], $_SESSION['pessoaNivelAcesso']);

    //Mensagem de Erro
    $_SESSION['loginErro'] = "Área restrita apenas para usuários cadastrados!";

    //Manda o usuário para tela de login
    header("Location: ../login.php");
}