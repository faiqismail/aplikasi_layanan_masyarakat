<?php
session_start();

$_SESSION["id_keluhan"] = '';
$_SESSION["id_masyarakat"] = '';
$_SESSION["jam_keluhan"] = '';
$_SESSION["tgl_keluhan"] = '';
$_SESSION["foto_keluhan"] = '';
$_SESSION["lokasi_keluhan"] = '';
$_SESSION["kategori_keluhan"] = '';
$_SESSION["ket_keluhan"] = '';

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
header('Location: ../tombol_proses.php');
?>
