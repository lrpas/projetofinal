<?php

require_once('db.php');

$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha ='$senha'";

$banco = new db();
$teste = $banco->conecta_mysql();

mysqli_query($teste,$sql);

$idr = mysqli_query($teste, $sql);

if($idr){
    $dados = mysqli_fetch_array($idr);
    
    if(isset($dados)){
       

    }
    else{
     
        header('location:cadastro.php?erro=1');
    }
    
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="normalize.css">

<style>
a{
    color: azure;
    text-decoration:none;
}

a:hover{
    color: #1da1f2;
}

</style>

</head>
<body>
    <div class="nav display">
        <div> <img src="imagens/user2.png" > </div>
        <div class="out"><a href="index.php">Sair</a></div>

    </div>

    <div class="geral">
 <div class="caixa">
    <div class="dados">
        <?php 
        echo 'Login: '.$dados[1];
         ?>
    </div>

    <div class="dados">
        <?php 
        echo 'Senha: '.$dados[2];
        ?>
    </div>
    <div class="dados">
        <?php 
        echo 'Nome: '.$dados[3];
        ?>
    </div>
    <div class="dados">
        <?php 
        echo 'CPF: '.$dados[4];
        ?>
    </div>
    <div class="dados">
        <label>
        <?php 
        echo'Email: '. $dados[5];
        ?>
        </label>
    </div>
    <div class="dados">
        <?php 
        echo 'RG: '.$dados[6];
        ?>
    </div>
    <div class="dados">
        <?php 
        echo 'Nome do pai: '.$dados[7];
        ?>
    </div >
    <div class="dados">
        <?php 
        echo 'Nome da mãe: '.$dados[8];
        ?>
    </div>
    <div class="dados">
        <?php 
        echo 'Data de nascimento: '.$dados[9];
        ?>
    </div>
   
    
    

</div>
<a href="redefinir.php" class="redefinir">  Redefinir senha  </a>
</div>


</body>
</html>