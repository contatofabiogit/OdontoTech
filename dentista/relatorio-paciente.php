<?php

include ('../pdf/mpdf.php');

//Executando consulta sql
$result1 = mysql_query("SELECT * FROM pessoa WHERE nivel_acesso = 'Paciente'");

$resultado1 = mysql_fetch_assoc($result1);

$pagina = "
    <html>
        <body>
          <h1> Relatório de Pacientes</h1>
          
          Cód. = ".$resultado1['id_pessoa']." <br />
          Nome = ".$resultado1['nome']."<br />
          Login = ".$resultado1['login']."<br />
          E-mail = ".$resultado1['email']."<br />
          Data de Nascimento = ".$resultado1['dt_nascimento']."<br />
          Telefone = ".$resultado1['telefone']."<br />
          
        </body>
        <h4>http://www.mtechsolucoes.com.br</h4>
    </html>
  ";

  $arquivo = "cadastro01.pdf";

  $mpdf = new mPDF();

  $mpdf->WriteHTML($pagina);

  $mpdf->Output($arquivo, 'I');

?>