<?php

include_once("../inc/config.php");
$nama_admindesa = $_POST['nama_admindesa'];
$email_admindesa = $_POST['email_admindesa'];
$passwords_admindesa = $_POST['passwords_admindesa'];

$result = mysqli_query($connection, "INSERT INTO admindesa (nama_admindesa, email_admindesa, passwords_admindesa) VALUES ('$nama_admindesa', '$email_admindesa', '$passwords_admindesa')");

if ($result) {
    echo "<script>
        document.location.href = '../register_admindesa.php';
        alert('Berhasil');
    </script>";
} else {
    echo "Silakan coba lagi!";
}

?>
