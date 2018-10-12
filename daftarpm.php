<?php 
require 'koneksi.php';
if (isset($_POST["daftarpm"])){
    if (tambahpm ( $_POST) > 0){
    	echo "
    	<script>
    	alert('data behasil ditambahkan');
    	document.location.href = 'coba.php'
    	</script>
    	";

    } else {
    	echo "
    	<script>
    	alert('data gagal ditambahkan');
    	document.location.href = 'coba.php'
    	</script>
    	";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Pembeli</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="daftar.css">

</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="page-header">
            <h1>Daftar Pembeli | <small style="color:white">dan nikmati berbagai keuntungan</small></h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namapm">Nama :</label>
                <input type="text" class="form-control" name="namapm" id="namapm" required>
            </div>
            <div class="form-group">
                <label for="namauser">Username :</label>
                <input type="text" class="form-control" name="namuser" id="namuser" required>
            </div>
            <div class="form-group">
                <label for="passpm">Password :</label>
                <input type="Password" class="form-control" name="passpm" id="passpm" required>
            </div>
            <div class="form-group">
                <label for="emailpm">Email :</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div cl
            <div class="form-group">
                <label for="alamatpm">Alamat :</label>
                <input type="text" class="form-control" id="alamatpm" name="alamatpm" required>
            </div>
            <div class="form-group">
                <label for="norekpm">No. Rekening:</label>
                <input type="numerik" class="form-control" name="norekpm" id="norekpm" required>
            </div>
            <div class="form-group">
                <label for="nopm">No. Telephone:</label>
                <input type="numerik" class="form-control" name="nopm" id="nopm" required>
            </div>
            <br>
            <button type="submit" class="btn btn-danger" name="daftarpm" style="widows: 900px;">Daftar</button>
            <br><br>
        </form>
    </div>
</body>

</html>