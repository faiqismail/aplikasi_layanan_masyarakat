<?php
session_start();

$_SESSION["id_admindesa"] = '';
$_SESSION["nama_admindesa"] = '';
$_SESSION["email_admindesa"] = '';
$_SESSION["passwords_admindesa"] = '';

unset($_SESSION["id_admindesa"]);
unset($_SESSION["nama_admindesa"]);
unset($_SESSION["email_admindesa"]);
unset($_SESSION["passwords_admindesa"]);

session_unset();
session_destroy();
header('Location: ../loginadmindesa.php');
?>
