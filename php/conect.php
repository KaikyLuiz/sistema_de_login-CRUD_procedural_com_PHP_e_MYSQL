<?php
    /* $sql variavel que recebe os valores para conexao, new mysqli forma de conexao ao banco, localhost endereco do bando de dados, root usuario do banco de dados, '' senha do banco de dados OBS. repare que 2'' juntas, ex1 nome do banco de dados */
    $sql = new mysqli ('localhost', 'root','', 'papelaria');
        
    $sql->set_charset("utf8");   /* O comando SQL "set_charset" PHP irá obter os dados em utf8, não importa como eles são armazenados no banco de dados. em outras palavras arrumar caracteres no banco.*/
    



    /* essa é outra forma de conectar no banco de dados !

            $bdServidor = 'localhost';
            $bdUsuario = 'root';
            $bdSenha = '';
            $bdBanco = 'papelaria';

            $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);


                    if (mysqli_connect_errno($conexao)) {
                    echo "Problemas para conectar no banco. Verifique os dados!";
                        die();
                    }
*/
?>