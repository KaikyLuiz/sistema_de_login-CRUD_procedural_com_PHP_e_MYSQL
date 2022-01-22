<?php
include 'protect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href=".../css/admim_painel.css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>painel de controle</title>
</head>
<body>
    <div class = "painel">
   <h1> bem vindo ao painel de controle, administrador  <?php echo $_SESSION['nome'];  ?><br><br> </h1>

    <a href="../php/controle_do_usuario.php"><button type = "button"> controle do usuario</button></a><br><br>
    <a href="../php/controle_admim.php"><button type = "button"> controle do adimistrador </button></a><br><br>
    <a href="../php/logout.php"><button type = "button"> sair </button></a><br><br>
    </div>
</body>
</html>