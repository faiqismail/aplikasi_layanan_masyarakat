<?php
include_once ("../inc/config.php");
$id_keluhan= $_GET['id'];

$data = mysqli_query($connection, "DELETE  FROM keluhan WHERE id_keluhan='$id_keluhan'");

if($data){
    header("Location: ../keluhan.php");
}else{
    echo"Failed";
}
?>