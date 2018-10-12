<?php 
if (isset($_POST['submit'])) {
            include 'koneksi.php';
            $namauser = $_POST['namauser'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM user WHERE namauser='$namauser' AND password='$password'";
            $ceklogin = mysqli_query($conn,$sql);
            if (mysqli_num_rows($ceklogin) >0) {
              $get = mysqli_fetch_assoc($ceklogin);
              $lvl = $get['idlevel'];
              if ($lvl=="1") {
                $_session['login'] = "1";
                  // echo "<div class='alert alert-success' role='alert'>Login Sukses</div>";    
                  header("location:admin.php");
                  } elseif ($lvl =="2") {
                    $_session['login'] = "2";
                    // echo "<div class='alert alert-success' role='alert'>Login Sukses</div>";
                    header("location:Profil.php");
                    } else{
                    echo "user tidak terdaftrar";
                    // header("location:indeks1.php");
                      // echo "<div class='alert alert-danger' role='alert'>Login Gagal</div>";
                      // header("location: index1.php");
                    }
                  }else{
                    echo "<script>alert('meong')</script>";
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
    <title>Masuk</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="MASUK.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color : white"><span class="glyphicon glyphicon-lamp" aria-hidden="true" style="color:white"></span>Meubel Jati Indah</a>
        </div>
        <form class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" style="width: 100%;">
            </div>
        
            <button type="submit" class="btn btn-primary" style="background-color: #62929a"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color:white" ></button>
        </form >
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color:white">Menu 1</a></li>
            <li><a href="coba.html" style="color:white">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:white"> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="masuk.php">Masuk</a></li>
                    <li><a href="daftar.php">Daftar</a>
                        <ul class="dropdown-menu">
                          <a href="daftarpm.php">Daftar Pembeli</a>
                          <a href="daftarpk.php">Daftar Pemasok</a>  
                        </ul>

                    </li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</nav>

<br><br><br>

    <div class="container">
        <div class="row" style="background-color: #8e98f5; color: white; border-radius: 20px; ">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
            <h1 class="page-header" style="text-align : center"> Login </h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Username</label><br>
                        <input type="namauser" class="form-control" placeholder="Username" name="namauser">
                        <label>Password</label><br>
                        <input type="password" class="form-control" placeholder="Password" name="password" >
                        <br>
                        <button class="btn btn-warning" type="submit" name="submit" value="login">Login</button>
                        <br><br>
                    </div>  
                </form>
            </div>
            <div class="col-sm-4">
            </div>      
        </div>  
    </div>
    



</body>
</html>
