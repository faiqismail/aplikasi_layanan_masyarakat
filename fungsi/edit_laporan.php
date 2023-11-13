<?php

include_once("../inc/config.php");

$id_pengeluaran = $_POST['id_pengeluaran'];
$tgl_pengeluaran = $_POST['tgl_pengeluaran'];
$ket_pengeluaran = $_POST['ket_pengeluaran'];
$pemasukan = $_POST['pemasukan'];
$pengeluaran = $_POST['pengeluaran'];

$data = mysqli_query($connection,"UPDATE  laporan SET id_pengeluaran='$id_pengeluaran',tgl_pengeluaran='$tgl_pengeluaran ',ket_pengeluaran='$ket_pengeluaran',pemasukan='$pemasukan',pengeluaran='$pengeluaran'WHERE id_pengeluaran= '$id_pengeluaran' ");

if ($data) {
    header("Location: ../laporan.php");
} else {
    echo "Failed to insert data";
}

?>
