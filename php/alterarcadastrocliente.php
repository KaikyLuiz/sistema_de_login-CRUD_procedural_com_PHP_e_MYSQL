<?php
include "protect.php";
include "conect.php";

if (isset($_GET['id']))
{
    $id_cli = $_GET['id'];

    $resultado = $sql->query ("SELECT * FROM cliente WHERE id_cliente = '$id_cli'");

    if (mysqli_num_rows($resultado) > 0){
        while ($user = mysqli_fetch_assoc($resultado)){
          $id = $user ['id_cliente'];
          $tipo = $user ['tipo'];
          $img = $user ['img_url']; 
          $nome = $user ['nome']; 
          $dtn = $user ['dt_nascimento']; 
          $estado = $user ['estado']; 
          $cidade = $user ['cidade']; 
          $bairro = $user ['bairro']; 
          $cep = $user ['cep']; 
          $lougradouro = $user ['logradouro']; 
          $n_residencia = $user ['n_residencia']; 
          $email = $user ['email']; 
        
          }
        }
      
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="../css/form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar dados do cliente</title>
</head>
<body>
<div class="formulario">
<form action="./salvar_auter_cli.php" method="POST" enctype="multipart/form-data">
            <div class="cadastro_cliente"><br>
                <p>PREENCHA O FORMULARIO E SALVE AS ALTERAÇÕES </p>
            </div>

            <p>cliente:<input type="radio" name="tipo_radio" value="juridico">juridico
                <input type="radio" name="tipo_radio" value="fisico">fisico
            </p>

            <label>Foto:</label> <input type="file" name="imgcli" value="<?php echo $img ?>"><br><br>

            <label>Nome:</label> <input type="text" name="nome" required="required" value="<?php echo $nome ?>"><br><br>

            <label>Data de Nascimento:</label> <input type="date" name="dt_nascimento" required="required" value="<?php echo $dtn ?>"><br><br>

            <label>Estado:</label> <input type="text" name="estado" required="required" value="<?php echo $estado ?>"><br><br>

            <label>cidade:</label> <input type="text" name="cidade" required="required" value="<?php echo $cidade ?>"><br><br>

            <label>bairro:</label> <input type="text" name="bairro" required="required" value="<?php echo $bairro ?>"><br><br>

            <label>CEP:</label> <input type="text" name="cep" required="required" value="<?php echo $cep ?>"><br><br>

            <label>logradouro:</label> <input type="text" name="logradouro" required="required" value="<?php echo $lougradouro ?>"><br><br>

            <label>n° da residencia:</label> <input type="text" name="n°_residencia" required="required" value="<?php echo $n_residencia ?>"><br><br>

            <label>Email:</label> <input type="email" name="email" required="required" value="<?php echo $email ?>"><br><br>

            <label>Senha:</label> <input type="password" name="senha" minlength="6" required="required" placeholder="digite uma nova senha para alterar"><br><br>

            <div class="button">

                <a href="../index.php"><button type="button">Voltar</button></a>

                <button type="submit" name="ID" value="<?php echo $id ?>" >salvar</button>

                <button type="reset">Limpar</button>
            </div>
        </form>
</div>
</body>
</html>
<?php

    }
    else {

      //id invalido, retornar ao controle do usuario 
      header ("location: ./controle_do_usuario.php");
    }

?>

