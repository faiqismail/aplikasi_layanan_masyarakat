<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_admindesa = $_POST['email_admindesa'];
    $passwords_admindesa = $_POST["passwords_admindesa"];
    

  // Verifikasi informasi pengguna
  include "inc/config.php";
  $query = "SELECT * FROM admindesa WHERE email_admindesa = '$email_admindesa' AND passwords_admindesa = '$passwords_admindesa'";
  $result = mysqli_query($connection, $query);
  $data = mysqli_num_rows($result);
  if ($data > 0) {
    // Jika informasi pengguna benar, berikan akses ke halaman tertentu
    $key = mysqli_fetch_assoc($result);

    $_SESSION["id_admindesa"] = $key["id_admindesa"];
    $_SESSION["nama_admindesa"] = $key["nama_admindesa"];
    $_SESSION["email_admindesa"] = $key["email_admindesa"];
   
    header('Location: home_admindesa.php');
    exit();
  } else {
    // Jika informasi pengguna salah, tampilkan pesan kesalahan
    $error = 'Email atau password salah';
    echo "<script>
        document.location.href='loginadmindesa.php'
        alert('Email atau password salah')
        </script>";
  }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login admindesa</title>
   <style>
    /**login  */
    .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    margin: 20px auto;
    transform: translate(-50%, -55%);
    background: rgba(0,0,0,.9);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
    
  }
  
  .login-box p:first-child {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    letter-spacing: 1px;
  }
  
  .login-box .user-box {
    position: relative;
  }
  
  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }
  
  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }
  
  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #fff;
    font-size: 12px;
  }
  
  .login-box form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    font-weight: bold;
    color: #ededed;
    font-size: 16px;
    background: transparent;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 3px
   
  }
  
  
  .login-box button:hover {
    background: #d5d5d5;
    color: #020202;
    border-radius: 8px;
  }
  
  .login-box button span {
    position: absolute;
    display: block;
  }
  
  .login-box button span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #fff);
    animation: btn-anim1 1.5s linear infinite;
  }
  
  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
  
    50%,100% {
      left: 100%;
    }
  }
  
  .login-box button span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #fff);
    animation: btn-anim2 1.5s linear infinite;
    animation-delay: .375s
  }
  
  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
  
    50%,100% {
      top: 100%;
    }
  }
  
  .login-box button span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #fff);
    animation: btn-anim3 1.5s linear infinite;
    animation-delay: .75s
  }
  
  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }
  
    50%,100% {
      right: 100%;
    }
  }
  
  .login-box button span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #fff);
    animation: btn-anim4 1.5s linear infinite;
    animation-delay: 1.125s
  }
  
  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }
  
    50%,100% {
      bottom: 100%;
    }
  }
  
  .login-box p:last-child {
    color: #aaa;
    font-size: 14px;
  }
  
  .login-box a.a2 {
    color: #fff;
    text-decoration: none;
  }
  
  .login-box a.a2:hover {
    background: transparent;
    color: #aaa;
    border-radius: 5px;
  }
  /*close login*/

  #register{
    background-color:rgba(0,0,1,.8);
    border-radius: 15px;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    
  }
  
  /* file animasi*/
  .loader {
    width: 1px;
    height: 112px;
    justify-content: center;
    
  }
  
  .box1,
  .box2,
  .box3 {
    border: 16px solid #000000;
    box-sizing: border-box;
    position: absolute;
    display: block;
  }
  
  .box1 {
    width: 112px;
    height: 48px;
    margin-top: 64px;
    margin-left: 0px;
    animation: abox1 4s 1s forwards ease-in-out infinite;
  }
  
  .box2 {
    width: 48px;
    height: 48px;
    margin-top: 0px;
    margin-left: 0px;
    animation: abox2 4s 1s forwards ease-in-out infinite;
  }
  
  .box3 {
    width: 48px;
    height: 48px;
    margin-top: 0px;
    margin-left: 64px;
    animation: abox3 4s 1s forwards ease-in-out infinite;
  }
  
  @keyframes abox1 {
    0% {
      width: 112px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  
    12.5% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  
    25% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  
    37.5% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  
    50% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  
    62.5% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  
    75% {
      width: 48px;
      height: 112px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    87.5% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    100% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  }
  
  @keyframes abox2 {
    0% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    12.5% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    25% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    37.5% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    50% {
      width: 112px;
      height: 48px;
      margin-top: 0px;
      margin-left: 0px;
    }
  
    62.5% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 64px;
    }
  
    75% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 64px;
    }
  
    87.5% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 64px;
    }
  
    100% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 64px;
    }
  }
  
  @keyframes abox3 {
    0% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 64px;
    }
  
    12.5% {
      width: 48px;
      height: 48px;
      margin-top: 0px;
      margin-left: 64px;
    }
  
    25% {
      width: 48px;
      height: 112px;
      margin-top: 0px;
      margin-left: 64px;
    }
  
    37.5% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 64px;
    }
  
    50% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 64px;
    }
  
    62.5% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 64px;
    }
  
    75% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 64px;
    }
  
    87.5% {
      width: 48px;
      height: 48px;
      margin-top: 64px;
      margin-left: 64px;
    }
  
    100% {
      width: 112px;
      height: 48px;
      margin-top: 64px;
      margin-left: 0px;
    }
  }
    /**close login */

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
margin-top: 12px;
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



   </style>
   

  </head>
<body>
<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img src="foto/KAB_GRESIK-transformed.png" class="logo" style="  margin-top: -7px; width: 100%;max-width: 45px;height: auto;  display: inline-block; vertical-align: middle; margin-right: 10px; "><b>LAYANAN DESA</b></a>
<a href="index1.php" >HOME</a>
<a href="pilihanlogin.php" id="active">LOGIN</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>  

<div class="login-box">
  <p>Login</p>
  <form   method="POST">
    <div class="user-box">
      <input type="email_admindesa" name="email_admindesa" id="email_admindesa"class="form-control">
      <label for="email_admindesa" class="form-label">Email</label>
    </div>
    <div class="user-box">
      <input  name="passwords_admindesa" id="passwords_admindesa" type="password"class="form-control">
      <label for="passwords_admindesa" class="form-label">Password</label>
    </div>
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>LOGIN</button>
      <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  </form>

</div>

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