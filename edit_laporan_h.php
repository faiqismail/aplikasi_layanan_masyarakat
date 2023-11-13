
<?php

include_once "inc/config.php";
$id_pengeluaran= $_GET['id'];
$datalaporan = mysqli_query($connection, "SELECT * FROM laporan ");
$data = mysqli_query($connection,"SELECT *FROM laporan WHERE id_pengeluaran = '$id_pengeluaran'; ");


$result = mysqli_fetch_array($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit laporan</title>
    <style>


  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body >

  <div class="container" style=" margin-top: 140px; background-color:#333;  border-radius:20px;"><br>
    <h2 class="text-center"style="color:white;">EDIT LAPORAN </h2>

        <form action="fungsi/edit_laporan.php" method="POST" enctype="multipart/form-data" id="from">
       
  
        <label  for="tgl_pengeluaran" class="form-label" style="color:white;">Tanggal </label>
    <input type="date" class="form-control" id="tgl_pengeluaran" name="tgl_pengeluaran" value="<?=$result['tgl_pengeluaran']?>" >   
    <input type="date" class="form-control" id="id_pengeluaran" name="id_pengeluaran" value="<?=$result['id_pengeluaran']?>" hidden> 

    <label  for="ket_pengeluaran" class="form-label" style="color:white;">Keterangan </label>
    <input type="text" class="form-control" id="ket_pengeluaran" name="ket_pengeluaran" value="<?=$result['ket_pengeluaran']?>" >   
    <input type="text" class="form-control" id="id_pengeluaran" name="id_pengeluaran" value="<?=$result['id_pengeluaran']?>" hidden> 
    
    <label  for="pemasukan" class="form-label" style="color:white;">Pemasukkan</label>
    <input type="text" class="form-control" id="pemasukan" name="pemasukan" value="<?=$result['pemasukan']?>" >   
    <input type="text" class="form-control" id="id_pengeluaran" name="id_pengeluaran" value="<?=$result['id_pengeluaran']?>" hidden> 
   
    <label  for="pengeluaran" class="form-label" style="color:white;">Pengeluaran </label>
    <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="<?=$result['pengeluaran']?>" >   
    <input type="text" class="form-control" id="id_pengeluaran" name="id_pengeluaran" value="<?=$result['id_pengeluaran']?>" hidden> 
    

  

   <br> <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button> 
       <br><br>
    </button><br>
    </div>     
  </div>
  
</form>
  

   





  <div class="container"><br><br>
<button type="reset" class="btn btn-dark" onclick="window.location.href='laporan.php'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>KEMBALI</button>
</div><br>

<script>
function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
}
}

</script>
</body>
    
</html>