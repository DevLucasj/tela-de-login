<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <div class="container container-login">
        <h2 class="titulo-login">Sistema de Login</h2>
        <form action="login.php" method="POST">
            <input type="text" id="usuario" name="usuario" placeholder="Usuário"><br><br>
            <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
            <input type="submit" value="Entrar">
          </form>

    </div>
   
</body>
</html>