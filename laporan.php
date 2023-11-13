<?php
include_once "inc/config.php";
$datalaporan = mysqli_query($connection, "SELECT * FROM laporan ");
$data = mysqli_query($connection,"SELECT *FROM laporan ");

$result = mysqli_fetch_array($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dana admindesa</title>
   <style>
    
/*TOP NAVIGATION*/
header{
position:fixed;
top:2rem;
width:100%;
z-index:9;
transition:0.5s;
}

.topnav {
overflow: hidden;
background-color: #333;
width:80%;
height:70px;
margin:auto; 
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
transition:0.5s;
background-size:cover;
background-position:center;
border-radius:5px;
margin-top: -20px;
}

.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 24px 20px;
text-decoration: none;
font-size: 17px;
position:relative;
transition:0.5s;
}

.logo{
width:30px;
position:relative;
top:-5px;
}

#active{
display:flex;
background:#eb592a;
}

.active:hover{
color:#fff;
}

.topnav .icon {
display: none;
}

.dropdown {
float: left;
overflow: hidden;
}

.dropdown .dropbtn {
font-size: 17px;    
border: none;
outline: none;
color: white;
padding: 24px 20px;
background-color: inherit;
font-family: inherit;
transition:0.5s;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 180px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
margin:auto 0rem;
text-decoration: none;
display: block;
text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
color: #eb592a;
}

.dropdown-content a:hover {
background-color: #ddd;
color: black;
}

.dropdown:hover .dropdown-content {
display: block;
}

#files {
display: none;
}

@media screen and (max-width: 820px) {
.topnav{
height:auto;
}
#active b{
display:none;
}
.logo{
width:40px;
position:static;
}
.dropdown .dropbtn {
padding: 14px 16px;
}
.topnav a:not(:first-child), .dropdown .dropbtn {
display: none;
}
.topnav a.icon {
float: right;
display: block;
}
}

@media screen and (max-width: 820px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
position: absolute;
right: 0;
top: 0;
}
.topnav.responsive a {
float: none;
display: block;
text-align: left;
padding: 14px 16px;
}
.topnav.responsive .dropdown {float: none;}
.topnav.responsive .dropdown-content {position: relative;}
.topnav.responsive .dropdown .dropbtn {
display: block;
width: 100%;
text-align: left;
}
}


/*ANIMATION*/
.animate{
visibility: visible;
-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
from {top: -50px; opacity: 0;} 
to {top: 60px; opacity: 1;}
}

@keyframes fadein {
from {top: -50px; opacity: 0;}
to {top: 60px; opacity: 1;}
}


/*close nabvar */

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   

  </head>
<body>
<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img src="foto/KAB_GRESIK-transformed.png" class="logo" style="  margin-top: -7px; width: 100%;max-width: 45px;height: auto;  display: inline-block; vertical-align: middle; margin-right: 10px; "><b>LAYANAN DESA</b></a>
<a href="home_admindesa.php" >HOME</a>
<a href="keluhan.php" >Keluhan</a>
<a href="proses.php" >Proses</a>
<a href="laporan.php" id="active">Laporan Dana</a>
<a href="register_admindesa.php" >register_admindesa</a>
<a href="index1.php" >logout</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>

<div class="container" style=" margin-top: 140px; background-color:#333;  border-radius:20px;"><br>
    <h2 class="text-center"style="color:white;">LAPORAN DANA DESA</h2>
        <form action="fungsi/add_laporan.php" method="POST" enctype="multipart/form-data" id="from">

        <div class="mb-3">
            <label for="tgl_pengeluaran" class="form-label" style="color:white;" >TGL Laporan</label>
            <input type="date" class="form-control" id="tgl_pengeluaran" name="tgl_pengeluaran" placeholder="MASUKKAN TGl ">
        </div><br>
        <div class="mb-3">
            <label for="ket_pengeluaran" class="form-label" style="color:white;" >Keterangan</label>
            <input type="text" class="form-control" id="ket_pengeluaran" name="ket_pengeluaran" placeholder="MASUKKAN KETERANGAN">
        </div><br>
        <div class="mb-3">
            <label for="pemasukan" class="form-label" style="color:white;" >Pemasukkan Dana </label>
            <input type="number" class="form-control" id="pemasukan" name="pemasukan" placeholder="MASUKKAN DANA DESA">
        </div><br>
        <div class="mb-3">
            <label for="pengeluaran" class="form-label" style="color:white;" >Pengeluaran Dana </label>
            <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" placeholder="MASUKKAN PENGELUARAN DANA">
        </div><br><br>

        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button> 
       <br><br>
        </form>

        
    </div>
</div>



<h3 class="text-center" style=" margin-top: 120px;">LAPORAN KEUANGAN DESA</h3><br>
 

  </table>
    <div class="container mt-2">
        <table class="table">
            <thead>
                <?php $no=1;?>
                <tr>
                <th scope="col">#</th>
                <th scope="col">TGL Laporan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Pemasukkan</th>
                <th scope="col">Pengeluaran</th>
                <th scope="col"></th>
                <th scope="col"></th>
                
               
                </tr>
            </thead>
            <tbody>
               <?php 
               include_once "inc/config.php";
               $data = mysqli_query($connection,"SELECT *
               FROM laporan");
               $total_pengeluaran = 0;
               $total_pemasukan = 0;
               $sisa = 0;
                ?>
                <?php
               foreach($data as $item_laporan):
               $total_pengeluaran += $item_laporan['pengeluaran'];
               $total_pemasukan += $item_laporan['pemasukan'];
               $sisa = $total_pemasukan - $total_pengeluaran;
               ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $item_laporan['tgl_pengeluaran'] ?></td>
                    <td><?= $item_laporan['ket_pengeluaran'] ?></td>
                    <td><?= $item_laporan['pemasukan']  ?></td>
                    <td><?= $item_laporan['pengeluaran']  ?></td>
                    <td> <a href="edit_laporan_h.php?id=<?= $item_laporan['id_pengeluaran'] ?>" class="btn btn-sm btn-warning">Edit</a></td>
                    <td> <a href="fungsi/delete_laporan.php?id=<?= $item_laporan['id_pengeluaran'] ?>" class="btn btn-sm btn-danger">delete</a></td>

                    
                    
               
                </tr>

               <?php endforeach ?>
            </tbody>
        </table>

                <div class="container">
                <div class="row">
                <div class="col" style="text-align:center;">
                <h5 style="background-color:lightgreen; color:green;">TOTAL PEMASUKKAN DANA : <?php echo number_format($total_pemasukan, 0, ',', '.'); ?> </h5>
                </div>
                <div class="col" style="text-align:center;">
                <h5 style="background-color:pink; color:red;">TOTAL PENGELUARAN DANA : <?php echo number_format($total_pengeluaran, 0, ',', '.'); ?></h5>
                </div>
                <div class="col" style="text-align:center;">
                <h5 style="background-color:lightblue; color:blue;">SISA : <?php echo number_format($sisa, 0, ',', '.'); ?> </h5>

                </div>
            </div>
            </div><br><br><br><br><br><br><br><br>
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