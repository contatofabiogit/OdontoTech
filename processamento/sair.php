<?php

session_start();
session_destroy();

//Remover todos os dados
unset($_SESSION['pessoaId'], $_SESSION['pessoaNome'], $_SESSION['pessoaLogin'], $_SESSION['pessoaSenha'], $_SESSION['pessoaNivelAcesso']);

//Redireciona usuário para tela de login
header("Location: ../login.php");
?>
