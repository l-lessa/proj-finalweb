<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estacionamento Floresta Negra</title>
</head>
<body>
  <h1>Estacionamento Floresta Negra</h1>
  <a href="index.html">Cadastrar Cliente</a>
  <a href="#">Alterar Cadastro</a>

  <?php
        session_start();                
        if(isset($_SESSION["esta_logado"]) 
            && $_SESSION["esta_logado"] == "true"){     
            echo "<br><br><br><a href='logout.php'>logout</a>";            
        }else{            
            header('Location: login.html');
        }
        
        
    ?>
</body>
</html>