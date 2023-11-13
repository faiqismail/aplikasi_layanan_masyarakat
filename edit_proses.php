

<?php
include_once "inc/config.php";
$id_tanggapan= $_GET['id'];

$datamasyarakat = mysqli_query($connection, "SELECT * FROM masyarakat ");
$datakeluhan = mysqli_query($connection, " SELECT * FROM keluhan");
$datatanggapan = mysqli_query($connection, " SELECT * FROM tanggapan");

$data = mysqli_query($connection,"SELECT *
FROM tanggapan
INNER JOIN masyarakat  ON tanggapan.id_masyarakat = masyarakat.id_masyarakat
INNER JOIN keluhan ON tanggapan.id_keluhan = keluhan.id_keluhan WHERE id_tanggapan = '$id_tanggapan';");

$result = mysqli_fetch_array($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT PROSES</title>
    <style>


  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body >
 
  <div class="container" style="color:white; margin-top: 140px; background-color:#333;  border-radius:20px;"><br>

    <h2 class="text-center"style="color:white; "> EDIT PROSES KELUHAN </h2>

        <form action="fungsi/edit_proses1.php" method="POST" enctype="multipart/form-data" id="from">

        <div class="mb-3">
            <label for="tgl_proses" class="form-label" style="color:white;" >Tgl proses</label>
            <input type="date" class="form-control" id="tgl_proses" name="tgl_proses" value="<?=$result['tgl_proses']?>" >   
            <input type="date" class="form-control" id="id_tanggapan" name="id_tanggapan" value="<?=$result['id_tanggapan']?>" hidden> 
        </div><br>
        <div class="mb-3">
            <label for="status" class="form-label" style="color:white;">Status</label>
            <input type="text" class="form-control" id="tgl_proses" name="status" value="<?=$result['status']?>" >   
            <input type="text" class="form-control" id="id_tanggapan" name="id_tanggapan" value="<?=$result['id_tanggapan']?>" hidden>
        </div><br><br>

        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button> 
       <br><br>
</div>
        </form>

   





  <div class="container"><br><br>
<button type="reset" class="btn btn-dark" onclick="window.location.href='proses.php'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>KEMBALI</button>
</div><br>