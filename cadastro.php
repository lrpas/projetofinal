
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastre-se!</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>

<div class="caixa">
    <div class="teste">
            <div class="imagem"> <img src="imagens/user.png" alt=""> </div>
        <form  method="post" action="registra.php " >
            
            <div><input type="text" name="login" placeholder="Digite seu login"  class="formtext"></div>
            <div><input type="password" name="senha" placeholder="Digite sua senha"  class="formtext"></div>
            <div><input type="text" name="nome" placeholder="Digite seu nome"  class="formtext"></div>
            <div><input type="text" name="cpf" placeholder="Digite seu cpf"  class="formtext"></div>
            <div><input type="text" name="email" placeholder="Digite seu Email"  class="formtext"></div>
            <div><input type="text" name="rg" placeholder="Digite seu RG"  class="formtext"></div>
            <div><input type="text" name="pai" placeholder="Nome do pai"  class="formtext"></div>
            <div><input type="text" name="mae" placeholder="Nome da mãe"  class="formtext"></div>
            <div><input type="date" name="nascimento" placeholder="digite a data de nascimento na forma dd/mm/aaaa"  class="formtext"></div>
             
             <input type="hidden" name="modo" id="modo" value="inserir">
             <input type="submit" value="login" class="btn"> 
              
        </form>
        <a href="index.php"><button class="btn">Voltar</button> 
     
    
    </a>
    </div>
</body>
</html>