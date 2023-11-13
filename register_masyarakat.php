<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Masyarkat</title>
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
<a href="index1.php" >HOME</a>
<a href="pilihanlogin.php" id="active">LOGIN</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>

  
  
  

  

    <div class="container" style=" margin-top: 140px; background-color:#333;  border-radius:20px;"><br>
    <h2 class="text-center"style="color:white;">REGISTER MASYARAKAT</h2>
        <form action="fungsi/add_masyarakat.php" method="POST" enctype="multipart/form-data" id="from">
        <div class="mb-3">
            <label for="nama_masyarakat" class="form-label" style="color:white;" >Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_masyarakat" name="nama_masyarakat" placeholder="MASUKKAN NAMA SESUAI KTP">
        </div><br>
        <div class="mb-3">
            <label for="alamat_masyarakat" class="form-label" style="color:white;" >Alamat Lengkap</label>
            <input type="text" class="form-control" id="alamat_masyarakat" name="alamat_masyarakat" placeholder="MASUKKAN ALAMAT LENGKAP">
        </div><br>
        <div class="mb-3">
            <label for="telepon_masyarakat" class="form-label" style="color:white;" >Nomer Telepon Wa</label>
            <input type="text" class="form-control" id="telepon_masyarakat" name="telepon_masyarakat" placeholder="MASUKKAN NOMER TELEPON ATAU WA">
        </div><br>
        <div class="mb-3">
            <label for="email_masyarakat" class="form-label" style="color:white;" >Email</label>
            <input type="email" class="form-control" id="email_masyarakat" name="email_masyarakat" placeholder="MASUKKAN EMAIL ">
        </div><br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color:white;">password</label>
            <input type="password" class="form-control" id="passwords_masyarakat" name="passwords_masyarakat" placeholder="******">
        </div><br><br>

        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button> 
       <br><br>
        </form>

        
    </div>
</div>
   

<div class="container"><br><br>
<a href="loginmasyarakat.php"><button type="reset" class="btn btn-dark" style="text-align: center;  justify-content: center; background-color: #333; color:white; " >
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="back" width="20" height="20" ><path fill="#d8a353" d="M20.86 33a2 2 0 0 1-1.26-.45L8.74 23.58a2 2 0 1 1 2.54-3.09l10.86 8.93a2 2 0 0 1 .27 2.81 2 2 0 0 1-1.55.77Z" class="color222222 svgShape"></path><path fill="#d8a353" d="M10 24a2 2 0 0 1-1.27-3.55l10.87-8.88a2 2 0 0 1 2.54 3.09l-10.86 8.92A2 2 0 0 1 10 24Z" class="color222222 svgShape"></path><path fill="#d8a353" d="M39.57 52.89H10a2 2 0 1 1 0-4h29.57a12.43 12.43 0 0 0 0-24.85H10a2 2 0 1 1 0-4h29.57a16.43 16.43 0 0 1 0 32.85Z" class="color222222 svgShape"></path></svg>
KEMBALI</button></a>
</div><br>
<br><br><br>


  
<br><br><br><br><b><b></b></b>
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