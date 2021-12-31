<?php
include 'protect.php';
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

    <a href="../php/logout.php"><button type = "button"> sair </button></a>
</body>
</html>