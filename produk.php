<?php

require 'koneksi.php';

$produk = query(" SELECT * FROM produk ");


 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Kelola Produk</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <style>
        .jumbotron {
            background-image: url(catalog/compute.jpg)
        }
    </style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   <ul class="nav nav-tabs"style="background-color : rgb(65, 59, 59)">

        <li role="presentation"><a href="admin.php"style="color: white;">Home</a></li>
        <li role="presentation"><a href="#"style="color: white;">Verifikasi</a></li>
        <li role="presentation"><a href="Profil.php"style="color: white;">Profil</a></li>
        <li role="presentation" class="active"><a href="#" style="background-color:#005792; text-decoration:none; color: white">Produk</a></li>
        

        
        <li role="presentation"><a href="info.php"style="color: white;">Informasi</a></li>
        
    </ul>
    <hr>
    <div class="container">
        <div class="jumbotron">
            <h1 style=" color: white; font-family: calibri">Produk Meubel</h1> <br><br>
            <p><a class="btn btn-primary btn-lg" href="tambahproduk.php" role="button">Tambah Katalog</a></p>

        </div>
    </div>




    <div class="container">
        <div class="row">
           

            <?php  foreach ($produk as $row ):?>
            <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="catalog/<?= $row["gambarproduk"];  ?>" alt="...">
                      <div class="caption">
                        <h3><?= $row["namaproduk"]; ?></h3>
                        <h5><?= $row["hargaproduk"]; ?></h5>
                        <h5><?= $row["stok"]; ?></h5>
                        <p><a href="editproduk.php?idproduk=<?= $row["idproduk"]; ?>" class="btn btn-primary" role="button">Edit</a></p>
                      </div>
                    </div>
                  </div>
                 
            <?php endforeach; ?>
        </div>
    </div>

    


    <hr>
    <p style="text-align : center;">
        PPL Agroindustri

    </p>


    </div>
</body>

</html>