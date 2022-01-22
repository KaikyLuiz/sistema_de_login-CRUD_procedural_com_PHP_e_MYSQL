<?php
include 'conect.php';
$email = $sql->real_escape_string($_POST["email"]);
$senha = $sql->real_escape_string($_POST["senha"]);

$dados = $sql->query ("SELECT * FROM admim where email = '$email' limit 1 ") or die ($mysqli->error);
$admim =  $dados->fetch_assoc();

if ($email == $admim['email']){
    if ($senha == $admim['senha']){
         if (!isset($_SESSION)){
                 session_start();
                }
                 $_SESSION['id'] = $admim['id'];
                 $_SESSION['nome'] = $admim['nome'];

                 header("location:../php/opicion_admim.php");
              }
              else{
                  echo " senha errada !";
                 
              }   
 }
 else
 {
    echo " email errado !";
    
 }
//password_verify(

?>