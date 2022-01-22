<?php
include 'protect.php';
include 'conect.php';
$ud = $_SESSION['id'];

$res = $sql->query ("SELECT * FROM `cliente` WHERE `id_cliente` = '$ud'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    
    bem vindo ao painel <?php echo $_SESSION['nome'];  ?><br><br>

    <a href="../php/logout.php"><button type = "button"> sair </button></a><br><br>
    <a href="../php/alterarcadastrocliente.php?id="><button type = "button"> alterar cadastro</button></a>
    <a href="../php/excluircontacli.php?id="><button type = "button"> excluir conta </button></a>
    
</body>
</html>