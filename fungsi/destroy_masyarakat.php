<?php
session_start();

$_SESSION["id_masyarakat"] = '';
$_SESSION["nama_masyarakat"] = '';
$_SESSION["alamat_masyarakat"] = '';
$_SESSION["telepon_masyarakat"] = '';
$_SESSION["email_masyarakat"] = '';
$_SESSION["passwords_masyarakat"] = '';

$_SESSION["id_keluhan"] = '';
$_SESSION["id_masyarakat"] = '';
$_SESSION["jam_keluhan"] = '';
$_SESSION["tgl_keluhan"] = '';
$_SESSION["foto_keluhan"] = '';
$_SESSION["lokasi_keluhan"] = '';
$_SESSION["kategori_keluhan"] = '';
$_SESSION["ket_keluhan"] = '';

unset($_SESSION["id_masyarakat"]);
unset($_SESSION["nama_masyarakat"]);
unset($_SESSION["alamat_masyarakat"]);
unset($_SESSION["telepon_masyarakat"]);
unset($_SESSION["email_masyarakat"]);
unset($_SESSION["passwords_masyarakat"]);


unset($_SESSION["id_keluhan"]);
unset($_SESSION["id_masyarakat"]);
unset($_SESSION["jam_keluhan"]);
unset($_SESSION["tgl_keluhan"]);
unset($_SESSION["foto_keluhan"]);
unset($_SESSION["lokasi_keluhan"]);
unset($_SESSION["kategori_keluhan"]);
unset($_SESSION["ket_keluhan"]);

session_unset();
session_destroy();
header('Location: ../loginmasyarakat.php');
?>
