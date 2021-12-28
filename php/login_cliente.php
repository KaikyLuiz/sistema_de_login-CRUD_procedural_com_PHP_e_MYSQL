<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>


    <div class='login'>
        <div class='avatar'>
            <h1> capa papelaria</h1>
        </div>
        <div class='logar'>
            <h1>faça seu login</h1>
            <form action="../index.php" method="POST">
                <label>Email:</label> <input type="email" name="email" required><br><br>
                <label>Senha:</label> <input type="password" name="senha"><br><br>
                <div class="button">
                <a href="../index.php"><button type="submit">Entrar</button></a>
                <a href="../php/cadastro_cliente.php"><button type="button">Cadastre-se</button></a>
            </form>
            </div>
        </div>

</body>

</html>