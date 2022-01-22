<?php 
include "conect.php";
if(isset($_GET ['id'])) {
$id_admim = $_GET ['id'];

$delete = $sql->query("DELETE FROM `admim` where `id` = '$id_admim'");

if ($delete == true){
    
header ("location: .../php/controle_admim.php");

}
else {echo "erro:" . $delete. "<br>" . $sql->error;
}
}
?>