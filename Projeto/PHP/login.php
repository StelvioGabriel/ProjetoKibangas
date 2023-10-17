<?php
include_once 'config.php'



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../CSS/estilo-login.css">
    
</head>
<body>
    <header>
        <div class="container">
            <div class="flex">
               <a href="../PHP/PaginaInicial.php"><img src="../imagens/escola/301176485_173874895197935_5479217160264599618_n.jpg" alt="" class="logo"></a>
    </header>
    <div class="main-login">
    <div class="login">
        <h1>LOGIN</h1>
        <div class="textfield">
            <label for="email"></label>
            <input type="email" name="email" id="" placeholder="Email" required>
             
          
        </div>
        <div class="textfield">
            
            <i class="bi bi-person"></i><input type="password" name="senha" id="" placeholder="Senha" required>
        </div>
          <input type="submit" value="Entrar" class="button">
    </div>
</div>

</body>
</html>