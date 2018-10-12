<?php 
require 'koneksi.php';

if (isset($_POST["submit"])){
	

	//var_dump($_POST); 
	//var_dump($_FILEs);
	// die;
	
    if (tambah ( $_POST) > 0){
    	echo "
    	<script>
    	alert('data behasil ditambahkan');
    	document.location.href = 'produk.php'
    	</script>
    	";

    } else {
    	echo "
    	<script>
    	alert('data gagal ditambahkan');
    	document.location.href = 'produk.php'
    	</script>
    	";
    }
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="Home.css">
</head>

<body>
    
    <ul class="nav nav-tabs"style="background-color : rgb(65, 59, 59)">

        <li role="presentation" ><a href="admin.html" style="color: white;">Home</a ></li>
        <li role="presentation"><a href="#"style="color: white;">Verifikasi</a></li>
        <li role="presentation"><a href="Profil.php"style="color: white;">Profil</a></li>

        <li role="presentation" class="active"><a href="#" style="background-color:#005792; text-decoration:none; color: white">Produk</a></li>
        <li role="presentation"><a href="info.php"style="color: white;">Informasi</a></li>
    </ul>
    <hr>
    <div class="container">
        <div class="jumbotron">
            <h1>Tambah Data Produk</h1>
            <p></p>
        </div>
    </div>
    <div class="container">
        <form class="bootstrap-form-with-validation" action="" method="post" >
            <h2 class="text-center">Tambah Data Produk</h2>
            <div class="form-group">
                <label class="control-label" for="namaproduk">Nama Produk</label>
                <input class="form-control" type="text" name="namaproduk" id="namaproduk" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="hargaproduk">Harga </label>
                <input class="form-control" type="text" name="hargaproduk" id="hargaproduk" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="stok">Stok </label>
                <input class="form-control" type="text" name="stok" id="stok">
            </div>
            
            <div class="form-group">
                <label class="control-label" for="gambarproduk">Gambar Produk</label>
                <input type="file" name="gambarproduk" id="gambarproduk">
            </div>
            
              <div class="col-sm-offset-0 col-sm-10">
                            <button href type="submit" class="btn btn-primary" name="submit" style="widows: 900px;">Simpan</button>
                            <button  href="produk.php"  type="reset" class="btn btn-danger">Batal</button>
               </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>


