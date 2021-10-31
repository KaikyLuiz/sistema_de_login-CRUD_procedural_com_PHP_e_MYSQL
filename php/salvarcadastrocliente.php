<?php

include "conect.php";

// variaveis para receber os parametros (valores do form).
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

// consultando se o email do cliente ja existe na base de dados
$salvar =  $sql->query("SELECT * FROM cliente WHERE email = '$email'");
$check = mysqli_num_rows($salvar);

/*//vendo as propriedades do arquivo 
echo "<pre>";
var_dump($_FILES ['imgcli']);
echo "<pre>";*/

// listando as propriedades do arquivo para upload 
$nome_arquivo = $_FILES ["imgcli"]["name"]; 
$nome_tmp_arquivo = $_FILES ["imgcli"]["tmp_name"];
$tamanho_arquivo = $_FILES ["imgcli"]["size"];

//configuarndo o tipo de arquivo de maisculo para minusculo, ou seja, de .JPG para .jpg
 $tipo_arquivo = explode ('.', $nome_arquivo);
 $tipo_arquivo_em_minusculo = strtolower(end ($tipo_arquivo));
 $tipo_arquivo_suportado = array ("jpg","jpeg","tiff","png", null );
 
// estrutura para fazer a validação
if (in_array ($tipo_arquivo_em_minusculo, $tipo_arquivo_suportado)){
    if ($tipo_radio == "juridico" ||$tipo_radio == "fisico" ){
      if ($check == 0) {

         //Salvando as imagens
           $pasta = "../img/perfil_cliente/";
           $img = uniqid ("IMG-", true). '.' . $tipo_arquivo_em_minusculo; 
           $img_url = $pasta . $img;
           $caminho_da_imagem = move_uploaded_file($nome_tmp_arquivo, $img_url);

           
           if ($caminho_da_imagem) {
           //salvando os arquivos
          $sql->query ("INSERT INTO  cliente  (tipo, img_url, nome, dt_nascimento, estado, cidade, bairro, cep, logradouro, n_residencia, email, senha) 
         VALUES ('$tipo_radio','$img_url' ,'$nome', '$dtn', '$estado', '$cidade', '$bairro', '$cep', '$logradouro', '$n_residencia',     '$email','$senha')") or die ($sql->error);
          $id_cliente = $sql->insert_id;
           echo "salvos com sucesso!";
           }
           
        }
        else{ 
            header ('Location: ../html/erro_no_cadcliente.html');
     }
    } 
    else {
        header("Location: ../html/erro_radio_cadcli.html");
    }
}
else {
        header ('Location: ../html/erro_no_cadcliente_img.html');
}

?>