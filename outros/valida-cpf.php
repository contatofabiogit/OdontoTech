<?php
        session_start();
        include_once("seguranca.php");
        include_once("conexao.php");

$c_cpf = $_POST['cpf'];

   function validaCPF($c_cpf){
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    $digitoA = 0;
    $digitoB = 0;

   for($i = 0, $x = 10; $i<= 8; $i++, $x-- ){

       $digitoA += $cpf[$i] * $x;

   }
    
    for($i = 0, $x = 11; $i<= 9; $i++, $x-- ){

        if (str_repeat($i, 11) == $cpf){
            return false;
        }
        
       $digitoB += $cpf[$i] * $x;

   }

    $somaA = (($digitoA%11) < 2) ? 0 : 11 - ($digitoA%11);
    $somaB = (($digitoB%11) < 2) ? 0 : 11 - ($digitoB%11);


    if(($somaA != $cpf[9]) || ($somaB != $cpf[10])){
        return 'false';
    }else{
        $nome = $_POST["nome"];
        $cro = $_POST["cro"];
        $especializacao = $_POST["especializacao"];
        $sexo = $_POST["sexo"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $dicasenha = $_POST["dicasenha"];
        $endereco = $_POST["endereco"];
        $nivelacesso = $_POST["nivelacesso"];

        $query1 = mysql_query("INSERT INTO usuarios (nome, sexo, login, senha, telefone, cpf, email, dicaSenha, endereco, nivel_acesso_id VALUES ('$nome', '$sexo', '$login', '$senha', '$telefone', '$cpf', '$email', '$dicasenha', '$endereco', '$nivelacesso')");

        $query2 = mysql_query("INSERT INTO dentista (cro, especializacao) VALUES ('$cro', '$especializacao')");

        if(mysql_affected_rows() != 0){
            header("Location: ../buscar-dentista.php");
        };
    }
    }
?>