<?php
include 'protect.php';
include 'conect.php';

$id = $_POST["ID"];
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


// listando as propriedades do arquivo para upload 
$nome_arquivo = $_FILES ["imgcli"]["name"]; 
$nome_tmp_arquivo = $_FILES ["imgcli"]["tmp_name"];
$tamanho_arquivo = $_FILES ["imgcli"]["size"];

//configuarndo o tipo de arquivo de maisculo para minusculo, ou seja, de .JPG para .jpg
 $tipo_arquivo = explode ('.', $nome_arquivo);
 $tipo_arquivo_em_minusculo = strtolower(end ($tipo_arquivo));
 $tipo_arquivo_suportado = array ("jpg","jpeg","tiff","png", null );
        
           if (in_array ($tipo_arquivo_em_minusculo, $tipo_arquivo_suportado)){
            if ($tipo_radio == "fisico"){
        
                // criptografando a senha 
                  $hash = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        
                 //configurando o caminho das imagens
                   $pasta = "../img/perfil_cliente/fisico/";
                   $img = uniqid ("IMG-", true). '.' . $tipo_arquivo_em_minusculo; 
                   $img_url = $pasta . $img;
                   $caminho_da_imagem = move_uploaded_file($nome_tmp_arquivo, $img_url);
                       
                   if($caminho_da_imagem){
                 
                 
                    //upando os arquivos
                $deu = $sql->query (" UPDATE cliente SET tipo = '$tipo_radio', img_url = '$img_url', nome = '$nome', dt_nascimento = '$dtn', estado = '$estado', cidade = '$cidade', bairro = '$bairro', cep = '$cep', logradouro = '$logradouro' , n_residencia = '$n_residencia', email = '$email', senha = '$hash' WHERE id_cliente=$id");

                if ($deu == true){
                  echo "deu certo!";
                }
                elseif ($deu == false){
                  echo " erro:" . $deu. "<br>" . $sql->error;
                }
               
                }
                else{
                //upando os arquivos sem A IMAGEM!
                $deu = $sql->query ("UPDATE cliente SET tipo = '$tipo_radio', img_url = null, nome = '$nome', dt_nascimento = '$dtn', estado = '$estado', cidade = '$cidade', bairro = '$bairro', cep = '$cep', logradouro = '$logradouro' , n_residencia = '$n_residencia', email = '$email', senha = '$hash' WHERE id_cliente=$id");

                if ($deu == true){
                  echo "deu certo!";
                }
                elseif ($deu == false){
                    echo " erro:" . $deu. "<br>" . $sql->error;
                }
            }    
            }
          
            elseif ($tipo_radio == "juridico" ){
                      
                        // criptografando a senha 
                         $hash = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        
                       //configurando o caminho das imagens
                         $pasta = "../img/perfil_cliente/juridico/";
                         $img = uniqid ("IMG-", true). '.' . $tipo_arquivo_em_minusculo; 
                         $img_url = $pasta . $img;
                         $caminho_da_imagem = move_uploaded_file($nome_tmp_arquivo, $img_url);
              
                         
                         if ($caminho_da_imagem) {
                             
                        //upando os arquivos
                        $deu = $sql->query (" UPDATE cliente SET tipo = '$tipo_radio', img_url = '$img_url', nome = '$nome', dt_nascimento = '$dtn', estado = '$estado', cidade = '$cidade', bairro = '$bairro', cep = '$cep', logradouro = '$logradouro' , n_residencia = '$n_residencia', email = '$email', senha = '$hash' WHERE id_cliente=$id");

                        if ($deu == true){
                          echo "deu certo!";
                        }
                        elseif ($deu == false){
                            echo " erro:" . $deu. "<br>" . $sql->error;
                        }
                    
                         }
                         else{
                          //upando os arquivos sem A IMAGEM!
                          $deu = $sql->query (" UPDATE cliente SET tipo = '$tipo_radio', img_url = null , nome = '$nome', dt_nascimento = '$dtn', estado = '$estado', cidade = '$cidade', bairro = '$bairro', cep = '$cep', logradouro = '$logradouro' , n_residencia = '$n_residencia', email = '$email', senha = '$hash' WHERE id_cliente=$id");

                          if ($deu == true){
                            echo "deu certo!";
                          }
                          elseif ($deu == false){
                            echo " erro:" . $deu. "<br>" . $sql->error;
                          }
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