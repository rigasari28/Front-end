
<?php 
require 'koneksi.php';
if (isset($_POST["daftarpk"])){
    if (tambahpk ( $_POST) > 0){
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
    <title>Daftar Pemasok</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="daftar.css">

</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="page-header">
            <h1>Daftar Pemasok | <small style="color:white">dan nikmati berbagai keuntungan</small></h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namapk">Nama :</label>
                <input type="text" class="form-control" name="namapk" id="namapk" required>
            </div>
            <div class="form-group">
                <label for="namauser">Username :</label>
                <input type="text" class="form-control" name="namauser" id="namauser" required>
            </div>
            <div class="form-group">
                <label for="passpk">Password :</label>
                <input type="Password" class="form-control" name="passpk" id="passpk"required>
            </div>
            <div class="form-group">
                <label for="emailpk">Email :</label>
                <input type="text" class="form-control" name="emailpk" id="emailpk"required>
            </div>
            
            <div class="form-group">
                <label for="alamatpk">Alamat :</label>
                <input type="text" class="form-control" id="alamatpk" name="alamatpk" required>
            </div>
            <div class="form-group">
                <label for="naper">Nama Perusahaan</label>
                <input type="text" class="form-control" id="naper" name="naper" required>
            </div>
            <div class="form-group">
                <label for="noper">Bukti Legal Kayu :</label>
                <input type="file" class="form-control" id="noper" name="noper" required>
            </div>
            <div class="form-group">
                <label for="norekpk">No. Rekening:</label>
                <input type="numerik" class="form-control" name="norekpk" id="norekpk" required>
            </div>
            <div class="form-group">
                <label for="nopk">No. Telephone:</label>
                <input type="numerik" class="form-control" name="nopk" id="nopk" required>
            </div>
            <br>
            <button type="submit" class="btn btn-danger" name="daftarpk" style="widows: 900px;">Daftar</button>
            <br><br>
        </form>
    </div>
</body>

</html>
            