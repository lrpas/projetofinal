<?php
$erro = isset($_GET['erro']) ? $_GET['erro']: 0;



?>


 
 <!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Site</title>
</head>
<body>

<div>
    <div class="display">
    <div class=" divimagem"> </div>
    <div class="caixa" >
            <div class="form">
           <form  action="home.php" method="post"  > 
            <img src="imagens/user.png">
            <div ><input type="text" name="login" placeholder="digite seu login"  class="caixatexto"></div>  
            <div ><input type="password" name="senha" placeholder="senha"  class="caixatexto"></div> 
            <label> <a href="recuperarsenha.php"> Esqueceu sua senha?</a></label>
           <div><button class="btn">  Entrar  </button></div> 
           

           </form>
           <a href="cadastro.php"><button class="btn" > Cadastre-se!</button> </a>

            </div>

          
           </div>
        

    </div>

    </div>
    <div class="footer" >@Copyright Capacitar Poli Junior Engenharia</div>
    </div>
    
</body>
</html>
