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
            <h1>Kelola Data Produk</h1>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p></p>
        </div>
    </div>
    <div class="container">
        <form class="bootstrap-form-with-validation">
            <h2 class="text-center">Data Produk</h2>
            <div class="form-group">
                <label class="control-label" for="text-input">Nama Produk</label>
                <input class="form-control" type="text" name="text-input" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input">Harga </label>
                <input class="form-control" type="password" name="password-input" id="password-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input">Stock </label>
                <input class="form-control" type="email" name="email-input" id="email-input">
            </div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label" for="file-input">File Input</label>
                <input type="file" name="file-input" id="file-input">
            </div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Tambah</button>
                <button class="btn btn-danger" type="submit">Batal</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>