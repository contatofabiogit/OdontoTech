<?php
    session_start();
    $usuariot = $_POST['usuario'];
    $senhat = $_POST['senha'];
    include_once ("conexao.php");
    $result = mysql_query("SELECT * FROM usuarios WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1");
    $resultado = mysql_fetch_assoc($result);

    echo "Usuário: ".$resultado['nome'];

    if(empty($resultado)){
        //Mensagem de erro
        $_SESSION['loginErro'] = "Usuário e/ou Senha Inválido(s)";
        
        //Manda o usuário para a tela de login
        header("Location: login.php");
    }else{
        
        //Define os valores atribuídos na sessão do usuário
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioSexo'] = $resultado['sexo'];
        $_SESSION['usuarioLogin'] = $resultado['login'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        $_SESSION['usuarioTelefone'] = $resultado['telefone'];
        $_SESSION['usuarioCpf'] = $resultado['cpf'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioDicaSenha'] = $resultado['dicaSenha'];
        $_SESSION['usuarioEndereco'] = $resultado['endereco'];
        $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
        
        if($_SESSION['usuarioNivelAcesso'] == 1){
            //Manda o usuário para a tela de login
            header("Location: main-admin.php");    
        }else if ($_SESSION['usuarioNivelAcesso'] == 2){
            //Manda o usuário para a tela de usuario
            header("Location: main-usuario.php");
        } else{
            //Manda o usuário para a tela de usuario
            header("Location: main-assistente.php");
        }
        
    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8"> </head>

    <body> </body>

    </html>