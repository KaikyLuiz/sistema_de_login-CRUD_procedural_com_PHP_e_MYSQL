<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados do cliente</title>
</head>
<body>
    <?php

include "connect.php";

$id_cliente = $_GET["id_cliente"];

$cliente = mysqli_query($sql, "SELECT * FROM cliente WHERE id_cliente = '$id_cliente' ");  // "mysqli_query" Executa uma consulta no banco de dados.

while ($coluna = mysqli_fetch_array($cliente)) 
/* mysqli_fetch_array() guarda os dados em índices, a função pode também guardar os dados em índices associativos, usando os nomes dos campos do conjunto de resultado como chave.*/
{
$id_cliente= $coluna["id_cliente"];
$tipo_radio = $_POST["tipo_radio"];
$nome = $_POST["nome"];
$dtn = $_POST["dt_nascimento"];
$cep = $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$bairro = $_POST ["bairro"];
$logradouro = $_POST["logradouro"];
$n_residencia = $_POST["n°_residencia"];
$email = $_POST["email"];
$senha = $_POST["senha"];
}   
?>
            <form action="../php/salvarcadastrocliente.php" method="POST" enctype="multipart/form-data">
            <div class="cadastro_cliente"><br>
                <p>PREENCHA O FORMULARIO E ALTERE SEUS DADOS </p>
            </div>
            <p>cliente:<input type="radio" name="tipo_radio" value="juridico">juridico
                <input type="radio" name="tipo_radio" value="fisico">fisico
            </p>

            <label>Foto:</label> <input type="file" name="imgcli"><br><br>

            <label>Nome:</label> <input type="text" name="nome" required="required"><br><br>

            <label>Data de Nascimento:</label> <input type="date" name="dt_nascimento" required="required"><br><br>

            <label>Estado:</label> <input type="text" name="estado" required="required"><br><br>

            <label>cidade:</label> <input type="text" name="cidade" required="required"><br><br>

            <label>bairro:</label> <input type="text" name="bairro" required="required"><br><br>

            <label>CEP:</label> <input type="text" name="cep" required="required"><br><br>

            <label>logradouro:</label> <input type="text" name="logradouro" required="required"><br><br>

            <label>n° da residencia:</label> <input type="text" name="n°_residencia" required="required"><br><br>

            <label>Email:</label> <input type="email" name="email" required="required"><br><br>

            <label>Senha:</label> <input type="password" name="senha" minlength="6" required="required"><br><br>

            <div class="button">

                <a href="../index.php"><button type="button">Voltar</button></a>

                <button type="submit">Salvar</button>

                <button type="reset">Limpar</button>
            </div>
        </form>
</fieldset>
</body>
</html>