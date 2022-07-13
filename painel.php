<?php
session_start();
include('verifica_login.php');
?>

<?php 
$titulo = "Painel";
include ('assets/head.php'); ?>


<main>
<div class="container container-login box-login">
<div class="notification">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <h3>oi krl</h3>
<h2>Olá,<?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</h2>

</div>


</main>
<?php include ('assets/footer.php'); ?>
