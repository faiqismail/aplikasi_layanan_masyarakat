<?php
include_once("../inc/config.php");

$id_tanggapan = $_POST['id_tanggapan'];
$tgl_proses = $_POST['tgl_proses'];
$status = $_POST['status'];

$query = "UPDATE tanggapan SET tgl_proses='$tgl_proses', status='$status' WHERE id_tanggapan='$id_tanggapan'";
$result = mysqli_query($connection, $query);

if ($result) {
    header("Location: ../proses.php");
    exit();
} else {
    echo "Failed to update data";
}
?>

