<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Keluhan</title>
    <style>
      *TOP NAVIGATION*/
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
      /* ...existing styles... */
      .btn-disabled {
        background-color: gray !important;
        pointer-events: none;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  </head>
  <body>
  <header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img src="foto/KAB_GRESIK-transformed.png" class="logo" style="  margin-top: -7px; width: 100%;max-width: 45px;height: auto;  display: inline-block; vertical-align: middle; margin-right: 10px; "><b>LAYANAN DESA</b></a>
<a href="home_admindesa.php" >HOME</a>
<a href="keluhan.php"id="active" >Keluhan</a>
<a href="proses.php" >Proses</a>
<a href="laporan.php" >Laporan Dana</a>
<a href="register_admindesa.php" >register_admindesa</a>
<a href="index1.php" >logout</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>

    <h3 class="text-center" style="margin-top: 30px;">Status Keluhan</h3><br>

    <div class="container mt-2">
      <table class="table">
        <thead>
          <?php $no=1; ?>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Tgl</th>
            <th scope="col">Jam</th>
            <th scope="col">Foto</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Keterangan</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once "inc/config.php";
          $data = mysqli_query($connection, "SELECT *
                                             FROM keluhan
                                             INNER JOIN masyarakat ON keluhan.id_masyarakat = masyarakat.id_masyarakat");


          foreach ($data as $item_keluhan):
            $id_keluhan = $item_keluhan['id_keluhan'];
            $id_masyarakat = $item_keluhan['id_masyarakat'];

            // Check if the keluhan ID is present in the tanggapan table
            $isDisabled = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM tanggapan WHERE id_keluhan = '$id_keluhan'")) > 0;
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $item_keluhan['nama_masyarakat'] ?></td>
              <td><?= $item_keluhan['telepon_masyarakat'] ?></td>
              <td><?= $item_keluhan['tgl_keluhan'] ?></td>
              <td><?= $item_keluhan['jam_keluhan'] ?></td>
              <td><img src="upload/<?= $item_keluhan['foto_keluhan'] ?>" height="100" width="100"></td>
              <td><?= $item_keluhan['lokasi_keluhan'] ?></td>
              <td><?= $item_keluhan['kategori_keluhan'] ?></td>
              <td><?= $item_keluhan['ket_keluhan'] ?></td>
              <td>
                <?php if ($isDisabled): ?>
                  <button class="btn btn-sm btn-success btn-process btn-disabled" disabled>proses</button>
                <?php else: ?>
                  <a href="tombol_proses.php?id=<?= $id_keluhan ?>&idmasyarakat=<?= $id_masyarakat ?>"
                    class="btn btn-sm btn-success btn-process">proses</a>
                <?php endif; ?>
              </td>
              <td>
                <a href="fungsi/delete_keluhan.php?id=<?= $item_keluhan['id_keluhan'] ?>"
                  class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
