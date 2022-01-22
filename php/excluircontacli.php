<?php 

include "conect.php";

if(isset($_GET ['id'])) {
$id_user = $_GET ['id'];

$delete = $sql->query (("DELETE FROM `cliente` WHERE `id_cliente` = '$id_user'"));

if ($delete == true){

    header ("location: ./controle_do_usuario.php");

}
else {echo "erro:" . $delete. "<br>" . $sql->error;
}
}
?>