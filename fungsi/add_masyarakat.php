<?php

include_once("../inc/config.php");
$nama_masyarakat = $_POST['nama_masyarakat'];
$alamat_masyarakat = $_POST['alamat_masyarakat'];
$telepon_masyarakat = $_POST['telepon_masyarakat'];
$email_masyarakat = $_POST['email_masyarakat'];
$passwords_masyarakat = $_POST['passwords_masyarakat'];

$result = mysqli_query($connection, "INSERT INTO masyarakat (nama_masyarakat, alamat_masyarakat, telepon_masyarakat, email_masyarakat, passwords_masyarakat) VALUES ('$nama_masyarakat', '$alamat_masyarakat', '$telepon_masyarakat', '$email_masyarakat', '$passwords_masyarakat')");

if ($result) {
    echo "<script>
        document.location.href = '../loginmasyarakat.php';
        alert('Berhasil');
    </script>";
} else {
    echo "Silakan coba lagi!";
}

?>
