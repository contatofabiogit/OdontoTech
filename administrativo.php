<?php

session_start();
include_once("./processamento/seguranca.php");
include_once("./processamento/conexao.php");

$link = $_GET['link'];

$pag[1] = 'main-admin.php';
$pag[2] = 'cadastrar-dentista.php';
$pag[3] = 'buscar-dentista.php';
$pag[4] = 'editar_dentista.php';
$pag[5] = 'visualiza_dentista.php';

if (!empty($link)) {
    if (file_exists($pag[$link])) {
        include $pag[$link];
    } else {
        include './main-dentista.php';
    }
} else {
    include './main-dentista.php';
}
?>
