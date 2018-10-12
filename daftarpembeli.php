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

        <form>
            <div class="form-group">
                <label for="nama">Nama Anda:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="Password" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat anda:</label>
                <input type="text" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label for="norek">No Rekening:</label>
                <input type="numerik" class="form-control" id="norek">
            </div>
            <div class="form-group">
                <label for="no">No HP/Telephone:</label>
                <input type="numerik" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-danger" style="widows: 900px;">Daftar</button>
            <br><br>
        </form>
    </div>
</body>

</html>