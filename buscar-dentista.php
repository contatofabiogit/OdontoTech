<?php
session_start();
include_once './processamento/seguranca.php';
include './processamento/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/logo-logomarca-render.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <title>OdontoTech - Home</title>
        <!-- Location-->
        <link rel="stylesheet" href="css/main-admin.css">
        <link rel="stylesheet" href="css/main-hover.css">
        <!-- MDL Google -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
        $resultado = mysql_query("SELECT * FROM pessoa WHERE nivel_acesso = 'Dentista'");
        $linhas = mysql_num_rows($resultado);
        ?>
        <div class="container">
            <br>
            <div class="row">
                <header>
                    Sistema Odontológico - Buscar Dentista
                    
                    <br />
                    <br />
                </header>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <td>Id</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Opções</td>
                    <tbody>
                        <?php
                        while ($linhas = mysql_fetch_array($resultado)) {
                            echo '<tr>';
                            echo '<td>' . $linhas['id_pessoa'] . '</td>';
                            echo '<td>' . $linhas['nome'] . '</td>';
                            echo '<td>' . $linhas['email'] . '</td>';
                            echo '<td> 
                            <a href="#"><button type="button" class="btn btn-sm btn-primary">Visualizar</button></a>
                            <a href="#"><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
                            <a href="#"><button type="button" class="btn btn-sm btn-danger">Excluir  </button></a>';
                            echo '</tr>';
                        }
                        ?>
                        
                    
                    
                    </tbody>
                </table>
            </div>
            <div class="logoCanto row-centered"> <img src="images/logo-render.png" alt="logo"> </div>
            <br>
            <div class="menu"> </div>
            <br>
            <div class="rodape text-center"> © Copyright 2016-2020 <a href="#">OdontoTech</a> - Versão 1.0.0.0 </div>
        </div>
    </body>

</html>