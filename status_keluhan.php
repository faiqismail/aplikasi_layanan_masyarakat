<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES</title>
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
/* animasi*/
.loader {
  color: rgb(0, 0, 0);
  font-family: "Poppins",sans-serif;
  font-weight: 500;
  font-size: 30px;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  height: 40px;
  padding: 10px 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-radius: 8px;
}

.words {
  overflow: hidden;
}

.word {
  display: block;
  height: 100%;
  padding-left: 10px;
  color: #9625a8;
  animation: spin_4991 4s infinite;
}

@keyframes spin_4991 {
  10% {
    -webkit-transform: translateY(-105%);
    transform: translateY(-105%);
  }

  25% {
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
  }

  35% {
    -webkit-transform: translateY(-205%);
    transform: translateY(-205%);
  }

  50% {
    -webkit-transform: translateY(-200%);
    transform: translateY(-200%);
  }

  60% {
    -webkit-transform: translateY(-305%);
    transform: translateY(-305%);
  }

  75% {
    -webkit-transform: translateY(-300%);
    transform: translateY(-300%);
  }

  85% {
    -webkit-transform: translateY(-405%);
    transform: translateY(-405%);
  }

  100% {
    -webkit-transform: translateY(-400%);
    transform: translateY(-400%);
    
  }
}

  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body >
  <header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img src="foto/KAB_GRESIK-transformed.png" class="logo" style="  margin-top: -7px; width: 100%;max-width: 45px;height: auto;  display: inline-block; vertical-align: middle; margin-right: 10px; "><b>LAYANAN DESA</b></a>
<a href="home_masyarakat.php" >HOME</a>
<a href="lapor_keluhan.php" >Lapor_keluhan</a>
<a href="status_keluhan.php"id="active" >status_keluhan</a>
<a href="laporandana_masyarakat.php" >Dana desa</a>
<a href="index1.php" >Logout</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>
<h3 class="text-center" style=" margin-top: 120px;">Status Proses Keluhan</h3><br>
 

 </table>
   <div class="container mt-2">
       <table class="table">
           <thead>
               <?php $no=1;?>
               <tr>
               <th scope="col">#</th>
               <th scope="col">Nama</th>
               <th scope="col">Tgl</th>
               <th scope="col">jam</th>
               <th scope="col">Foto</th>
               <th scope="col">Lokasi</th>
               <th scope="col">kategori</th>
               <th scope="col">keterangan</th>
               <th scope="col">tgl_proses</th>
               <th scope="col">status</th>
               <th scope="col"></th>
             
              
               </tr>
           </thead>
           <tbody>
              <?php 
              include_once "inc/config.php";
              $data = mysqli_query($connection,"SELECT *
              FROM tanggapan
              INNER JOIN masyarakat ON tanggapan.id_masyarakat = masyarakat.id_masyarakat 
              INNER JOIN keluhan ON tanggapan.id_keluhan = keluhan.id_keluhan");
              
              
              foreach($data as $item_proses): ?>
               <tr>
                   <td><?= $no++;?></td>
                   <td><?= $item_proses['nama_masyarakat'] ?></td>
                   <td><?= $item_proses['tgl_keluhan'] ?></td>
                   <td><?= $item_proses['jam_keluhan'] ?></td>
                   <td><img src="upload/<?= $item_proses['foto_keluhan'] ?> "height="100" width="100" ></td>
                   <td><?= $item_proses['lokasi_keluhan'] ?></td>
                   <td><?= $item_proses['kategori_keluhan'] ?></td>
                   <td><?= $item_proses['ket_keluhan'] ?></td>
                   <td><?= $item_proses['tgl_proses'] ?></td>
                   <td><?= $item_proses['status'] ?></td>
                 
                   
               </tr>
               </tr>
              <?php endforeach ?>
           </tbody>
       </table>


  

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