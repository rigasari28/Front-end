<?php 
require 'koneksi.php';
//ambil data url
$idproduk = $_GET["idproduk"];
//query data mahasiswa berdasarkan id
$produk = query("SELECT * FROM produk WHERE idproduk = $idproduk")[0];


if (isset($_POST["editproduk"])){
	
	
    if (ubah ( $_POST) > 0){
    	echo "
    	<script>
    	alert('data behasil diubah');
    	document.location.href = 'produk.php'
    	</script>
    	";

    } else {
    	echo "
    	<script>
    	alert('data gagal diubah');
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
    <title>Kelola Data Produk</title>
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
            <h1>Edit Data Produk</h1>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p></p>
        </div>
    </div>
<div class="container">
        <form class="bootstrap-form-with-validation" action="" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Data Produk</h2>
            <input type="hidden" name="idproduk" value="<?= $produk["idproduk"]; ?>">
			<input type="hidden" name="gambarLama" value="<?= $produk["gambarproduk"]; ?>">
            <div class="form-group">
                <label class="control-label" for="namaproduk">Nama Produk</label>
                <input class="form-control" type="text" name="namaproduk" id="namaproduk" value="<?= $produk["namaproduk"]; ?>">
            </div>
            <div class="form-group">
                <label class="control-label" for="hargaproduk">Harga Produk </label>
                <input class="form-control" type="text" name="hargaproduk" id="hargaproduk" value="<?= $produk["hargaproduk"]; ?>">
            </div>
            <div class="form-group">
                <label class="control-label" for="stok">Stok </label>
                <input class="form-control" type="text" name="stok" id="stok" value="<?= $produk["stok"]; ?>">
            </div>
            
            <div class="form-group">
                <label class="control-label" for="gambarproduk">Gambar Produk</label>
                <img src="catalog/<?= $produk['gambarproduk'];  ?>" widht="40"> <br><br>
                <input type="file" name="gambarproduk" id="gambarproduk">
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="editproduk">Tambah</button>
                <button  href="produk.php?"  type="reset" class="btn btn-warning">Batal</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>
