
<?php 
session_start();
$titulo = "home";
include ('assets/head.php'); ?>


<main>
<div class="container container-login">
        <div class="box-login" >
        <h2 class="titulo-login">Sistema de Login</h2>
        <form class="form-login" action="login.php" method="POST">
            <input type="text" id="usuario" name="usuario" placeholder="Usuário"><br><br>
            <input name="senha" class="input is-large" type="password" placeholder="Sua senha"><br>
            <button type="submit" class="button">Entrar</button>
            <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
          </form>
                </div>  
    </div>
</main>
<?php include ('assets/footer.php'); ?>
