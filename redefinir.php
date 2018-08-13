<?php
require_once('db.php');


$banco = new db();
$teste = $banco->conecta_mysql();

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recuperarsenha.css">
    <link rel="stylesheet" href="normalize.css">
    
    <title>Redefinir</title>
</head>
<body>

<?php

echo "<script>alert('Você está prestes a redefinir sua senha')</script>";

?>


<div class="geral">

    <div class ="formulario">
        digite seu login e cpf para alterar a senha
        <form action="home.php" method="post">
            <div><input type="text" name="login"  class="textform" placeholder="digite seu login"></div>
            <div><input type="text" name="cpf"  class="textform" placeholder="digite seu cpf"></div>
            <div><input type="text" name="cpf"  class="textform" placeholder="Nova Senha"></div>

            <div><button class="btn" >Enviar</button></div>

        </form>
        
        <a href="index.php"><button class="btn" >Sair</button></a>
    </div>

</div>


</body>
</html>