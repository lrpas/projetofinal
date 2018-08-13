<?php
require_once('db.php');

$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$nascimento = $_POST['nascimento'];

$banco = new db();
$teste = $banco->conecta_mysql();

$sql = "INSERT INTO usuario (login,senha,nome,cpf,email,rg,pai,mae,nascimento) 
        VALUES ('".$login."','".$senha."','".$nome."','".$cpf."','".$email."','".$rg."','".$pai."','".$mae."','".$nascimento."')";

        if(mysqli_query($teste,$sql)){

                echo "<script>alert('Usuário Cadastrado')</script>";
        }

        else { 
                echo "<script>alert('Erro')</script>";
        }


?>