<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Odontológico - OdontoTech</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ie10-viewport-bug-workaround.css">
    <link rel="stylesheet" href="css/signin.css">

    <!-- Location-->
    <link rel="stylesheet" href="css/estiloLogin.css">

    <!-- MDL Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css"> </head>

<body>
    <div class="container">
        <div class="row formulario">
            <div class="row cabecalho"> <strong>OdontoTech</strong> </div>
            <div class="row logoLogin"> <img src="images/logo-render.png" alt="logomarca"> </div>
            <br>
            <form role="form-signin" method="POST" action="./processamento/valida_login.php">
                <div class="row entrada">
                    <div class="iconInput"> <i class="glyphicon glyphicon-user"></i>
                        <input type="text" name="login" class="form-control" placeholder="Login" required autofocus/> </div>
                    <br>
                    <div class="iconInput"> <i class="glyphicon glyphicon-lock"></i>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required/> </div>
                    <br>

                    </div>
                    <br>
                    <center><button type="submit" class="btn btn-primary acessa">Acessar</button></center>
                    <br>
                    <br>

                    <div class="text-danger text-center">
                        <?php
                        if(isset($_SESSION['loginErro'])){
                            echo $_SESSION['loginErro'];
                            unset($_SESSION['loginErro']);
                        }
                        ?>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- MDL Google -->
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
