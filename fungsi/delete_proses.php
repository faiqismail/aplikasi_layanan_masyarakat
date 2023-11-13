<?php
include_once ("../inc/config.php");
$id_tanggapan= $_GET['id'];

$data = mysqli_query($connection, "DELETE  FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");

if($data){
    header("Location: ../proses.php");
}else{
    echo"Failed";
}
?>