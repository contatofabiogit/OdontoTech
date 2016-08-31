<?php
session_start();
$usuariot = $_POST['login'];
$senhat = $_POST['senha'];

include_once './conexao.php';

$result = mysql_query("SELECT * FROM pessoa WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);

//echo $resultado['nome'];

if(empty($resultado)){
    //Mensagem de erro
    $_SESSION['loginErro'] = "Usuário ou Senha Inválidos";
    
    //Redirecionamento
    header("Location: ../login.php");
    
}else{
    $_SESSION['pessoaId'] = $resultado['id_pessoa'];
    $_SESSION['pessoaNome'] = $resultado['nome'];
    $_SESSION['pessoaLogin'] = $resultado['login'];
    $_SESSION['pessoaSenha'] = $resultado['senha'];
    $_SESSION['pessoaNumResidencial'] = $resultado['num_residencial'];
    $_SESSION['pessoaRg'] = $resultado['rg'];
    $_SESSION['pessoaCpf'] = $resultado['cpf'];
    $_SESSION['pessoaDtNascimento'] = $resultado['dt_nascimento'];
    $_SESSION['pessoaNivelAcesso'] = $resultado['nivel_acesso'];
    $_SESSION['pessoaTelCelular'] = $resultado['tel_celular'];
    $_SESSION['pessoaTelResidencial'] = $resultado['tel_residencial'];
    
    if($_SESSION['pessoaNivelAcesso'] == 'Dentista'){
        header("Location: ../dentista/administrativo.php?link=1");
    }else if($_SESSION['pessoaNivelAcesso'] == 'Assistente'){
        header("Location: ../assistente/main-assistente.php");
    }else if($_SESSION['pessoaNivelAcesso'] == 'Recepcionista'){
        header("Location: ../recepcionista/main-recepcionista.php");
    }else if($_SESSION['pessoaNivelAcesso'] == 'Paciente'){
        header("Location: ../paciente/main-paciente.php");
    }
}
?>