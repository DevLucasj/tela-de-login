<?php
session_start(); ?>
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
        <form action="login.php">
            <label for="usuario">Usuário</label><br>
            <input type="text" id="fusuario" value=""><br><br>
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha">
            <input type="submit" value="Entrar">
          </form>

    </div>
   
</body>
</html>