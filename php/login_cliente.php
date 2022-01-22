<?php
include 'conect.php';

$email = $sql->real_escape_string($_POST["email"]);
$senha = $sql->real_escape_string($_POST["senha"]);

$dados = $sql->query ("SELECT * FROM cliente where email = '$email' limit 1 ") or die ($sql->error);

$usuario =  $dados->fetch_assoc();

if ($email == $usuario['email']){
    if (password_verify($senha, $usuario['senha'])){
         if (!isset($_SESSION)){
                 session_start();
                }
                 $_SESSION['id'] = $usuario['id_cliente'];
                 $_SESSION['nome'] = $usuario['nome'];

                 header("location:../php/painel.php");
              }
     else{
      header("location:../html/erro_no_logincliente_senha.html");
      }
    }
 else{
  header("location:../html/erro_no_logincliente_email.html");
 }

?>