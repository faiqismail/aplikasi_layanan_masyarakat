<?php 
date_default_timezone_set('Asia/Jakarta');
session_start();
include "../inc/config.php";
$id_masyarakat =  $_SESSION["id_masyarakat"];
$tgl_keluhan = date('Y-m-d');
$jam_keluhan = date('H:i:s');
$foto_keluhan = $_FILES['foto_keluhan']['name'];
$ukuran = $_FILES['foto_keluhan']['size'];
$tipe = $_FILES['foto_keluhan']['type'];
$tmp_file = $_FILES['foto_keluhan']['tmp_name'];

$path ="../upload/".$foto_keluhan;

if($tipe == "image/jpeg" || $tipe == "image/png"){
    if($ukuran <= 100000){
        if(move_uploaded_file($tmp_file,$path)){
            $lokasi_keluhan = $_POST["lokasi_keluhan"];
            $kategori_keluhan = $_POST["kategori_keluhan"];
            $ket_keluhan = $_POST["ket_keluhan"];

            $result = mysqli_query($connection, "INSERT INTO keluhan (id_masyarakat, jam_keluhan, tgl_keluhan, foto_keluhan, lokasi_keluhan, kategori_keluhan, ket_keluhan)
            VALUES ('$id_masyarakat', '$jam_keluhan', '$tgl_keluhan', '$foto_keluhan', '$lokasi_keluhan', '$kategori_keluhan', '$ket_keluhan')");

            if($result){
                echo "<script>
                document.location.href='../lapor_keluhan.php';
                alert('Berhasil! Keluhan Anda telah tercatat.');
                </script>";
            } else {
                echo "Silakan coba lagi.";
            }
        } else {
            echo "Gagal mengunggah foto.";
        }
    } else {
        echo "Ukuran foto terlalu besar.";
    }
} else {
    echo "Tipe file tidak didukung.";
}
?>
