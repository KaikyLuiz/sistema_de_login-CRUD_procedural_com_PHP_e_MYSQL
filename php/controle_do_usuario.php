<?php 
include "protect.php";
include "conect.php";
$result = $sql->query("SELECT * FROM cliente");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../css/controle.css">
    <title>controle do usuario</title>
</head>
<body>
    <div class = "container">
        <h2>usuario</h2>
        <table border="1px">
            <tr>
                <th>id</th>
                <th>tipo de cliente</th>
                <th>caminho da imagem</th>
                <th>nome</th>
                <th>data de nascimento</th>
                <th>estado</th>
                <th>cidade</th>
                <th>bairro</th>
                <th>cep</th>
                <th>logradouro</th>
                <th>numero de residencia</th>
                <th>email</th>
                <th>senha</th>
            </tr>
</thread>
<tbody>
<?php   
if ($result->num_rows>0){
    while($user = $result->fetch_assoc()){
?>
        <tr>
                <td><?php echo $user ['id_cliente']; ?></td>
                <td><?php echo $user ['tipo']; ?></td>
                <td><img src="<?php echo $user ['img_url']; ?>"></td>
                <td><?php echo $user ['nome']; ?></td>
                <td><?php echo $user ['dt_nascimento']; ?></td>
                <td><?php echo $user ['estado']; ?></td>
                <td><?php echo $user ['cidade']; ?></td>
                <td><?php echo $user ['bairro']; ?></td>
                <td><?php echo $user ['cep']; ?></td>
                <td><?php echo $user ['logradouro']; ?></td>
                <td><?php echo $user ['n_residencia']; ?></td>
                <td><?php echo $user ['email']; ?></td>
                <td><?php echo $user ['senha']; ?></td>
                <td><a href="alterarcadastrocliente.php?id=<?php echo $user ['id_cliente'];  ?>"> editar</a>&nbsp;
                <a href="excluircontacli.php?id=<?php echo $user ['id_cliente'];  ?>"> excluir</a></td>
    </tr>
    <?php
         }} 
    ?>
    </tbody>
   </table>
  </div>
 </body>
</html>