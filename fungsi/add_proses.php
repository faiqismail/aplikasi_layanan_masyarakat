<?php
session_start();
include "../inc/config.php";

$id_masyarakat = $_SESSION["id_masyarakat"];
$id_keluhan = $_SESSION["id_keluhan"];
$tgl_proses = $_POST["tgl_proses"];
$status = $_POST["status"];

// Periksa keberadaan id_keluhan dalam tabel keluhan
$checkQuery = "SELECT * FROM keluhan WHERE id_keluhan = '$id_keluhan'";
$checkResult = mysqli_query($connection, $checkQuery);
if (mysqli_num_rows($checkResult) > 0) {
    // id_keluhan ada dalam tabel keluhan, lanjutkan dengan INSERT
    $insertQuery = "INSERT INTO tanggapan (id_masyarakat, id_keluhan, tgl_proses, status) VALUES ('$id_masyarakat', '$id_keluhan', '$tgl_proses', '$status')";
    $insertResult = mysqli_query($connection, $insertQuery);

    if ($insertResult) {
        echo "<script>
        window.location.href='../proses.php';
        alert('Berhasil Memproses');
        </script>";
    } else {
        echo "Gagal menyimpan data ke database: " . mysqli_error($connection);
    }
} else {
    echo "ID Keluhan tidak valid.";
}

mysqli_close($connection);
?>

