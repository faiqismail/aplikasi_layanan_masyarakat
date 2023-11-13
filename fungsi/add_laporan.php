<?php

include_once("../inc/config.php");
$tgl_pengeluaran = $_POST['tgl_pengeluaran'];
$ket_pengeluaran = $_POST['ket_pengeluaran'];
$pemasukan = $_POST['pemasukan'];
$pengeluaran = $_POST['pengeluaran'];

$result = mysqli_query($connection, "INSERT INTO laporan (tgl_pengeluaran, ket_pengeluaran, pemasukan, pengeluaran) VALUES ('$tgl_pengeluaran', '$ket_pengeluaran', '$pemasukan', '$pengeluaran')");

if ($result) {
    echo "<script>
        document.location.href = '../laporan.php';
        alert('Berhasil');
    </script>";
} else {
    echo "Silakan coba lagi!";
}

?>
