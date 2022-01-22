<?php
include "protect.php";
include "conect.php";

$dados = $sql->query ("SELECT * FROM admim");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../css/controle.css">
    <title>controle do adiministardor</title>
</head>
<body>
    <div class = "container">
        <h2>administrador</h2>
        <a href=".../css/cad_admim.php" ></a><button>adicionar um administrador</button><br><br>
        <table border="1px">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>caminho da imagem</th>
                <th>email</th>
                <th>senha</th>
            </tr>
</thread>
<tbody>
<?php   
if ($dados->num_rows>0){
    while($admim = $dados->fetch_assoc()){
?>
        <tr>
                <td><?php echo $admim ['id']; ?></td>
                <td><?php echo $admim ['nome']; ?></td>
                <td><img src="<?php echo $admim ['foto']; ?>"></td>
                <td><?php echo $admim ['email']; ?></td>
                <td><?php echo $admim ['senha']; ?></td>
                <td><a href="alterarcadastroadmim.php?id=<?php echo $admim ['id'];  ?>"> editar</a>&nbsp;
                <a href= "excluircontaadm.php?id=<?php echo $admim ['id'];  ?>"> excluir</a></td>
    </tr>
    <?php
         }} 
    ?>
    </tbody>
   </table>
  </div>
 </body>
</html>