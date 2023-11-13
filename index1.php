<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
   
    <style>
        
      
 /* navbar */     
 html {
scroll-behavior: smooth;
}
:root{
scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important;
}
::-webkit-scrollbar {
height: 12px;
width: 8px;
background: #000;
}
::-webkit-scrollbar-thumb {
background: gray;
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
background: #000;
}
body{
margin:0;
overflow-x:hidden;
font-family: 'Noto Sans JP', sans-serif;
background-size:cover;
background-repeat:no-repeat;
background-position:center;
}


/*DEFAULT*/
a{
text-decoration:none;
transition:0.5s;
}



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


/**close */
    </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

<html>

<body>
<!--TOP NAVIGATION-->
<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img src="foto/KAB_GRESIK-transformed.png" class="logo" style="  margin-top: -7px; width: 100%;max-width: 45px;height: auto;  display: inline-block; vertical-align: middle; margin-right: 10px; "><b>LAYANAN DESA</b></a>
<a href="index1.php" id="active">HOME</a>
<a href="pilihanlogin.php">LOGIN</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>



      
      
    
       
       
        <div class="loader" style=" justify-content: center;margin-top: 120px; ">
            <span>SIAP MELAYANI  </span>
            <div class="words">
                <span class="word">MASYARAKAT</span>
                <span class="word">KELUHAN</span>
                <span class="word">KRITIKAN</span>
                <span class="word">MASYARAKAT</span>
              
              
              
            </div>
     </div>
     <!-- isi--> <br>

<div class="container" style=" justfy-content:center; text-align: center;">


<img src="foto/foto1.jpg" alt="foto" width="1200" height="400" style=" border-radius:40px;">

</div>

 <!-- close-->



  <!-- close-->
     <!-- footer-->
     <footer>
  <div  class="d-flex justify-content-center"   >
    <div class="container" style="  position: absolute; background-color: #333;bottom: 0; width: 100%; align-items: center;justify-content: center; text-align: center; border-radius: 20px 20px 0px 0px;  ">
  <div class="row" >

      <div class="col">
      <img src="foto/KAB_GRESIK-transformed.png" alt="foto" width="150" height="150">

        <ul class="list-unstyled">
          <li style="color:white;"> <h6>&#127978;Layanan kami Tersedia di Desa Gumeno</h6></li>
          
        </ul>
       
      </div>
      <div class="col">
        <h3 style="color:white; margin-top: 40px;">Menerima Keluhan </h3>
        <ul class="list-unstyled" >
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="streetsign" width="20" height="20"><path fill="none" stroke="#595bd4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M49.872 95h-6.895V8.448A3.448 3.448 0 0 1 46.424 5h0a3.448 3.448 0 0 1 3.448 3.448V95z" class="colorStroke000000 svgStroke"></path><path fill="none" stroke="#595bd4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m16.479 24.667-6.167 5.708 6.167 5.708h26.498V24.667zM74.479 32.625l6.167 5.708-6.167 5.709H50.19V32.625zM83.521 13.25l6.167 5.708-6.167 5.709H50.19V13.25z" class="colorStroke000000 svgStroke"></path></svg> Jalan rusak</li>
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="waterfall" width="20" height="20"><path fill="#fe9526" d="M47.2 19.4c.5-.4.9-1.1.9-1.9 0-1.3-1.1-2.4-2.4-2.4-.4 0-.7.1-1 .2v-.1c0-1.7-1.4-3.1-3.1-3.1-1.7 0-3.1 1.4-3.1 3.1-.2-.1-.4-.1-.6-.1-.9 0-1.6.5-1.9 1.3-.4-.4-1-.6-1.6-.6-1.4 0-2.5 1.1-2.5 2.5 0 .9.5 1.7 1.2 2.1-1.1 1.8-1.1 3.5-1.1 3.8 10.5 1.5 16.1 1.1 16.9-1 .4-.9-.2-2.2-1.7-3.8z" class="color45c941 svgShape"></path><path fill="#53d86a" d="M36.6 21.7c.3-1.2-.5-2.4-1.7-2.6-.7-.2-1.4 0-1.9.5 0-1.1-.8-2.1-1.9-2.3-.5-.1-1.1 0-1.5.2.1-.2.1-.3.1-.5.4-1.9-.8-3.8-2.7-4.3-1.8-.4-3.5.6-4.1 2.2-.3-.5-.7-.8-1.3-1-1.1-.2-2.1.4-2.3 1.5v.5c-.3-.2-.6-.4-.9-.4-1.2-.3-2.4.5-2.6 1.7-.2.8.1 1.6.7 2.1-.5 1.3-.3 2.5-.3 2.7 6 .9 12.1 1.8 18.1 2.8 0 0 .2-.5.3-1.2.9-.2 1.8-.9 2-1.9z" class="color5ce259 svgShape"></path><path fill="#595bd4" d="M24 23.6c-.2-.9-1.9-6.8-8.3-6.2C5.4 18.3 2.8 39.6 2 48.9 1.9 50.6 3.2 52 4.9 52H22c.7-8.5 1.3-19.9 2-28.4z" class="color51221e svgShape"></path><path d="M24 23.6c-.7 8.5-1.3 19.9-2 28.4H4.9c-1.7 0-3-1.4-2.8-3.1.1-.8.2-1.7.3-2.6 4.5-.8 7.5-2.6 9.5-5 2.9-3.6 2.1-7 4.4-12.8 1.1-2.8 2.9-5.9 5.6-9 1.4 1.6 1.9 3.6 2.1 4.1z" opacity=".1" fill="#000000" class="color000000 svgShape"></path><path fill="#595bd4" d="M40 23.6c.2-.9 1.9-6.8 8.3-6.2 10.3.9 12.9 22.2 13.7 31.5.1 1.7-1.2 3.1-2.8 3.1H31.8c-.7-8.5.7-21.5 8.2-28.4z" class="color51221e svgShape"></path><path d="M59.1 52H31.8c-.6-8.5.7-21.5 8.3-28.4.2-.7 1.4-4.9 5.4-6-1.2 3-2.3 6.8-2.6 11.1-.3 4.7-.6 10.7 3.3 15.2 3.6 4.1 9.5 5.7 15.8 4.9.1 1.8-1.2 3.2-2.9 3.2z" opacity=".1" fill="#000000" class="color000000 svgShape"></path><path fill="#5aa5ff" d="M39.8 26.9c-.8 4.8-1 9.8-1 14.8 0 2 .2 5 .4 7.8h-25c1.4-11.6 5-27.7 10.3-27.7h16.1c-.3 1.6-.6 3.3-.8 5.1z" class="color5ab5ff svgShape"></path><path fill="#167ffc" d="M27.4 37.4c.1.1.1.3.1.4-.3 2.9-.5 5.9-.5 8.9 0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-3 .2-6.1.5-9 0-.2.1-.3.2-.4.1-.1.3-.1.4-.1.3 0 .4.1.5.2zm2.9-15.6c-1.3 3.4-2.4 7.1-3.1 11-.1.3.1.6.5.7h.1c.3 0 .5-.2.6-.5.8-4 1.9-7.7 3.3-11.2h-1.4zm-7.8 9.4c-.3-.1-.6.1-.7.4-1 3.7-1.6 7.6-1.9 11.5 0 .3.2.6.5.6s.6-.2.6-.5c.3-3.9.9-7.7 1.9-11.3.1-.3-.1-.6-.4-.7zm.3-2.4.3.3h.2c.3 0 .5-.2.6-.4.2-.5.3-.9.5-1.4.1-.1 0-.3 0-.4l-.3-.3c-.1-.1-.3 0-.4 0l-.3.3c-.2.5-.3.9-.5 1.4-.2.2-.2.4-.1.5zM33 38.2c.3 0 .6-.2.6-.5.2-3.4 1-8.6 1.9-11.6v-.4l-.3-.3h-.4l-.3.3c-1 3.2-1.7 8.5-2 11.9-.1.3.1.6.5.6z" class="color2398d8 svgShape"></path><path d="M38.8 41.7c0 2 .2 5 .4 7.8h-25c.5-3.7 1.1-8 2-12 3 1.4 6.4 2 9.8 1.7 5.3-.6 10.1-3.5 13.1-7.7-.2 3.3-.4 6.7-.3 10.2z" opacity=".1" fill="#000000" class="color000000 svgShape"></path><path fill="#f9f9f9" d="M39.1 46.4c-.2 0-.4 0-.6.1v-.4c0-1.9-1.6-3.5-3.5-3.5-1.6 0-2.9 1.1-3.3 2.5-.5-.6-1.3-1-2.1-1-1.3 0-2.4.9-2.7 2.2-.4-.4-1-.7-1.7-.7-.4 0-.8.1-1.2.3-.2-2.3-2.1-4-4.4-4-2.3 0-4.2 1.8-4.4 4.1-.4-.2-.9-.3-1.4-.3-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2H39c1.6 0 2.8-1.3 2.8-2.8.1-1.7-1.2-2.9-2.7-2.9z" class="colorf9f9f9 svgShape"></path><path d="M41.9 49.2c0 1.6-1.3 2.8-2.8 2.8H27.7c6.7-.8 7.9-6.1 5.2-8.7.6-.4 1.3-.7 2.1-.7 1.9 0 3.5 1.6 3.5 3.5v.4c.2 0 .4-.1.6-.1 1.5 0 2.8 1.2 2.8 2.8z" opacity=".1" fill="#000000" class="color000000 svgShape"></path></svg> Sungai macet</li>
          <li style="color:white;">& keluhan lainya</li>
          
        </ul>
      </div>
     
      <div class="col">
        <h3 style="color:white;  margin-top: 40px;">Kontak kami</h3>
        <ul class="list-unstyled">
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1219.547 1225.016" id="whatsapp"><path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path><linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#20b038"></stop><stop offset="1" stop-color="#60d66a"></stop></linearGradient><path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path><path fill="#FFF" fill-rule="evenodd" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" clip-rule="evenodd"></path><path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path></svg> 082231184092</li>
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"  > <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/> </svg> gumenoku</li>
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" data-name="Layer 1" viewBox="0 0 32 32" id="gmail"><path fill="#ea4435" d="M16.58,19.1068l-12.69-8.0757A3,3,0,0,1,7.1109,5.97l9.31,5.9243L24.78,6.0428A3,3,0,0,1,28.22,10.9579Z"></path><path fill="#00ac47" d="M25.5,5.5h4a0,0,0,0,1,0,0v18a3,3,0,0,1-3,3h0a3,3,0,0,1-3-3V7.5a2,2,0,0,1,2-2Z" transform="rotate(180 26.5 16)"></path><path fill="#ffba00" d="M29.4562,8.0656c-.0088-.06-.0081-.1213-.0206-.1812-.0192-.0918-.0549-.1766-.0823-.2652a2.9312,2.9312,0,0,0-.0958-.2993c-.02-.0475-.0508-.0892-.0735-.1354A2.9838,2.9838,0,0,0,28.9686,6.8c-.04-.0581-.09-.1076-.1342-.1626a3.0282,3.0282,0,0,0-.2455-.2849c-.0665-.0647-.1423-.1188-.2146-.1771a3.02,3.02,0,0,0-.24-.1857c-.0793-.0518-.1661-.0917-.25-.1359-.0884-.0461-.175-.0963-.267-.1331-.0889-.0358-.1837-.0586-.2766-.0859s-.1853-.06-.2807-.0777a3.0543,3.0543,0,0,0-.357-.036c-.0759-.0053-.1511-.0186-.2273-.018a2.9778,2.9778,0,0,0-.4219.0425c-.0563.0084-.113.0077-.1689.0193a33.211,33.211,0,0,0-.5645.178c-.0515.022-.0966.0547-.1465.0795A2.901,2.901,0,0,0,23.5,8.5v5.762l4.72-3.3043a2.8878,2.8878,0,0,0,1.2359-2.8923Z"></path><path fill="#4285f4" d="M5.5,5.5h0a3,3,0,0,1,3,3v18a0,0,0,0,1,0,0h-4a2,2,0,0,1-2-2V8.5a3,3,0,0,1,3-3Z"></path><path fill="#c52528" d="M2.5439,8.0656c.0088-.06.0081-.1213.0206-.1812.0192-.0918.0549-.1766.0823-.2652A2.9312,2.9312,0,0,1,2.7426,7.32c.02-.0475.0508-.0892.0736-.1354A2.9719,2.9719,0,0,1,3.0316,6.8c.04-.0581.09-.1076.1342-.1626a3.0272,3.0272,0,0,1,.2454-.2849c.0665-.0647.1423-.1188.2147-.1771a3.0005,3.0005,0,0,1,.24-.1857c.0793-.0518.1661-.0917.25-.1359A2.9747,2.9747,0,0,1,4.3829,5.72c.089-.0358.1838-.0586.2766-.0859s.1853-.06.2807-.0777a3.0565,3.0565,0,0,1,.357-.036c.076-.0053.1511-.0186.2273-.018a2.9763,2.9763,0,0,1,.4219.0425c.0563.0084.113.0077.169.0193a2.9056,2.9056,0,0,1,.286.0888,2.9157,2.9157,0,0,1,.2785.0892c.0514.022.0965.0547.1465.0795a2.9745,2.9745,0,0,1,.3742.21A2.9943,2.9943,0,0,1,8.5,8.5v5.762L3.78,10.9579A2.8891,2.8891,0,0,1,2.5439,8.0656Z"></path></svg> pemdesgumeno@gmail.com</li>
        </ul>
      </div>
      </div>
    </div>
  </div><br>

  </footer>

   <!--JAVASCRIPT-->
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


