<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cliente</title>
</head>
<body>
    <div class='login'>
        <div class='avatar'>
            <h1> capa papelaria</h1>
        </div>
        <div class='logar'>
            <h1>faça seu login</h1>
            <form action="../php/logar_cliente.php" method="POST" >
                <label>email: </label><input type="email" name="email" placeholder="Digite seu email" required ><br><br>
                <label>senha: </label> <input type="password" name="senha" placeholder="Digite sua senha" required><br><br>
                <div class="button">
                <button type="submit">Entrar</button><br><br>
                <a href="../html/cadastro_cliente.html">não é cadatrado? acesse e cadastre-se </a>
            </form>
            </div>
        </div>

</body>

</html>