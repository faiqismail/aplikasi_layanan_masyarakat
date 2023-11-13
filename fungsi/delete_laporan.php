<?php
include_once ("../inc/config.php");
$id_pengeluaran= $_GET['id'];

$data = mysqli_query($connection, "DELETE  FROM laporan WHERE id_pengeluaran='$id_pengeluaran'");

if($data){
    header("Location: ../laporan.php");
}else{
    echo"Failed";
}
?>