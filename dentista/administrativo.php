<?php

session_start();
include_once("../processamento/seguranca.php");
include_once("../processamento/conexao.php");



$link = $_GET['link'];

$pag[1] = './main-dentista.php';

$pag[2] = './cadastrar-dentista.php';
$pag[3] = './buscar-dentista.php';
$pag[4] = './editar_dentista.php';
$pag[5] = './visualizar_dentista.php';

$pag[6] = './cadastrar-paciente.php';
$pag[7] = './visualizar_paciente.php';
$pag[8] = './buscar-paciente.php';
$pag[9] = './editar_paciente.php';

$pag[10] = './cadastrar-funcionario.php';
$pag[11] = './buscar-funcionario.php';
$pag[12] = './visualizar_funcionario.php';
$pag[13] = './editar_funcionario.php';

$pag[14] = './cadastrar-receita.php';

$pag[15] = './novo-agendamento.php';

$pag[16] = './relatorio-paciente.php';
$pag[17] = './relatorio-procedimento.php';
$pag[18] = './relatorio-receita.php';

$pag[19] = './cadastrar-procedimento.php';


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
