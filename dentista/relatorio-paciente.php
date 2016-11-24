<?php

include ('../pdf/mpdf.php');

//Executando consulta sql
$resultado = mysql_query("SELECT * FROM pessoa WHERE nivel_acesso = 'Paciente'");
//$linhas = mysql_fetch_array($resultado);

//while ($linhas = mysql_fetch_array($resultado)) {
$pagina = "
    <html>
        <head>
            <title>Relatório de Pacientes</title>
        </head>
        <body>
          <h1> Relatório de Pacientes</h1>
          Registros Encontrados: " . mysql_num_rows($resultado) . "
            ";
while ($linhas = mysql_fetch_array($resultado)):
    $pagina .= "
          <hr />
          Cód. = " . $linhas['id_pessoa'] . " <br />
          Nome = " . $linhas['nome'] . "<br />
          Login = " . $linhas['login'] . "<br />
          E-mail = " . $linhas['email'] . "<br />
          Data de Nascimento = " . $linhas['dt_nascimento'] . "<br />
          Telefone = " . $linhas['telefone'] . "<br />
          <hr />
  ";
endwhile;
//}
$pagina .= "
        </body>
    </html>";

$arquivo = "relatorio_pacientes.pdf";

$mpdf = new mPDF();

$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');
?>