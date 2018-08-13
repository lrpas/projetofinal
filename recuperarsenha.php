<?php

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recuperarsenha.css">
    <link rel="stylesheet" href="normalize.css">
    
    <title>Recuperar</title>
</head>
<body>

<div class="geral">

    <div class ="formulario">
        digite seu login e cpf para recuperar a senha
        <form action="teste.php" method="post">
            <div><input type="text" name="login"  class="textform" placeholder="digite seu login"></div>
            <div><input type="text" name="cpf"  class="textform" placeholder="digite seu cpf"></div>
            <div><button class="btn" >Enviar</button></div>
        </form>
            <div>
                <a href="index.php"><button class="btn" >Voltar</button></a>
            </div>
    </div>

</div>



</body>
</html>