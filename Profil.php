<?php

require 'koneksi.php';

$userpk = query(" SELECT * FROM user WHERE idlevel = 3 ");
$userpm = query(" SELECT * FROM user WHERE idlevel = 2 ");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Profil</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <style>
        .jumbotron {
            background-image: url(foto.jpg)
        }
        #textbox {
            border-radius: 10px;
            width : 400%; 
            height: 200px;
           
        }
    </style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <ul class="nav nav-tabs"style="background-color : rgb(65, 59, 59)">

        <li role="presentation"><a href="admin.php"style="color: white;">Home</a></li>
        <li role="presentation"><a href="#"style="color: white;">Verifikasi</a></li>
        <li role="presentation" class="active"><a href="#" style="background-color:#005792; text-decoration:none; color: white">Profil</a></li>
        

        <li role="presentation"><a href="produk.php"style="color: white;">Produk</a></li>
        <li role="presentation"><a href="info.php"style="color: white;">Informasi</a></li>
        
    </ul>
    <hr>
    <div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Verifikasi Data Pemasok</h2>

        </div>
    </div>


    <div class="container">
        <div class="row">
        </div>
    <hr>
    <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">Nama </th style="text-align:center">
                        <th style="text-align:center">Username</th style="text-align:center">
                        <th style="text-align:center">Email</th style="text-align:center">
                        <th style="text-align:center">Nama Perusahaan</th style="text-align:center">
                        <th style="text-align:center">Bukti Legal Kayu</th style="text-align:center">
                        <th style="text-align:center">No. Rekening</th style="text-align:center">
                        <th style="text-align:center">Alamat</th style="text-align:center">
                        <th style="text-align:center">No. Telephone</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
                        <th style="text-align:center">Aksi</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($userpk as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["namauser"]; ?> </td>
            <td> <?= $row["email"]; ?> </td>
            <td> <?= $row["namaperusahaan"]; ?> </td>
            <td> <img src="catalog/<?= $row["noper"];  ?>" width="100" > </td>
            <td> <?= $row["no_rek"]; ?> </td>
            <td> <?= $row["alamat"]; ?> </td>
            <td> <?= $row["no_hp"]; ?> </td>
            <td> <?= $row["status"]; ?> </td>
            <td> 
            <p style="text-align:center">
                <a href = "verif.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin untuk diverifikasi?');" class="btn btn-primary"" role="button"> Verifikasi </a>
                <br> <br> 
                <a href = "tolak.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin untuk ditolak?');" class="btn btn-warning" role="button"> Tolak </a>
            </p>
            </td>
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>
</div>
        <hr>
<div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Data Pembeli</h2>

        </div>
    </div>


    <div class="container">
        <div class="row">
        </div>
    <hr>
    <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                         <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">Nama </th style="text-align:center">
                        <th style="text-align:center">Username</th style="text-align:center">
                        <th style="text-align:center">Email</th style="text-align:center">
                        <th style="text-align:center">No. Rekening</th style="text-align:center">
                        <th style="text-align:center">Alamat</th style="text-align:center">
                        <th style="text-align:center">No. Telephone</th style="text-align:center">
                        
                        
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($userpm as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["namauser"]; ?> </td>
            <td> <?= $row["email"]; ?> </td>
            <td> <?= $row["no_rek"]; ?> </td>
            <td> <?= $row["alamat"]; ?> </td>
            <td> <?= $row["no_hp"]; ?> </td>
           
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>
        <hr>
        <p style="text-align : center;">
            PPL Agroindustri

        </p>


    </div>

</body>
</html>