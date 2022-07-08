<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/css.css">
    
    <title>Home</title>
</head>
<body>
<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
    <div class="container container-login">
        <div class="box-login" >
        <h2 class="titulo-login">Sistema de Login</h2>
        <form class="form-login" action="login.php" method="POST">
            <input type="text" id="usuario" name="usuario" placeholder="Usuário"><br><br>
            <input name="senha" class="input is-large" type="password" placeholder="Sua senha"><br>
            <button type="submit" class="button">Entrar</button>
          </form>
                </div>  
    </div>
   
</body>
</html>