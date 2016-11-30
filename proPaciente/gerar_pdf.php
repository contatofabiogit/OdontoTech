<?php

include '../pdf/mpdf.php';

$pagina = " 
    <html>
    <body>
        <h1>Relatório de Pacientes Cadastrados!</h1>
        <ul>
            <li>teste1@gmail.com</li>
            <li>teste2@gmail.com</li>
            <li>teste3@gmail.com</li>
        </ul>
        <h4>www.fvs.edu.br</h4>
    </body>
    </html>
";
$arquivo = "Cadastro01.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');