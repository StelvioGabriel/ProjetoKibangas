<?php
include_once 'config.php'; 

if(isset($_POST['enviar'])){  

$nome =$_POST['nome'];
$nome2 =$_POST['nome2'];
$data_nasc =$_POST['data_nasc'];
$email =$_POST['email'];
$senha =$_POST['senha'];

$sql= " INSERT INTO usuarios ( nome , nome2, data_nasc , email, senha) VALUES ('$nome','$nome2','$data_nasc','$email','$senha')"; 

$retorno= mysqli_query($conexao, $sql); 

if (!$retorno) {
    echo "Erro ao cadastrar";
   }
   else {
        echo "<script>
        alert('Sr. {$email} os seus dados foram cadastrados');
        window.location.href='PaginaInicial.php';
        </script>";
   }
  }  




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>INSCREVA-SE</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="flex">
               <a href=""><img src="./imagens/escola/301176485_173874895197935_5479217160264599618_n.jpg" alt="" class="logo"></a>
    </header>
    <form action="login.php" method="post">
        <div class="main-cadastro">
        <div class="cadastro">
            <h1>CADASTRE-SE</h1>
            <div class="textfield">
                <label for="email"></label>
                <input type="name" name="nome" id="" placeholder="Primeiro nome" required>
                </div>
                <div class="textfield">
                    <label for="name2"></label>
                    <input type="nome" name="nome2" id="" placeholder="Segundo Nome" required>
                    <div class="textfield">
                        <label for="data"></label>
                        <input type="date" name="data_nas" id="" placeholder="" required>
                        </div>
        
                <div class="textfield">
                <label for="email"></label>
                <input type="email" name="email" id="" placeholder="email" required>
        
        
            </div>
            <div class="textfield">
        
                </i><input type="password" name="senha" id="" placeholder="Senha" required> </div>
            </div>
              <input name="enviar" type="submit" value="Cadastrar" class="button" >
        </div>
        </div>
    </form>

</div>   
</body>
</html>