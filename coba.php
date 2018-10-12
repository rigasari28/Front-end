<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="desain.css">
</head>

<body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>




    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color : white"><span class="glyphicon glyphicon-lamp"
                        aria-hidden="true" style="color:white"></span>Meubel Jati Indah</a>
            </div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" style="width: 100%;">
                </div>

                <button type="submit" class="btn btn-primary" style="background-color: #62929a"><span class="glyphicon glyphicon-search"
                        aria-hidden="true" style="color:white"></button>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="coba.html" style="color:white">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"
                            style="color:white"> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="masuk.php">Masuk</a></li>
                        <li><a href="daftarpk.php">Daftar Sebgai Pemasok</a></li>
                        <li><a href="daftarpm.php">Daftar Sebgai Customer</a></li>

                    </ul>
                </li>
                </li>
            </ul>
        </div>
    </nav>


    <br><br><br>
    <div class="jumbotron">

        <h1>Selamat Datang!</h1>
        <p>---</p>
        <h3> di Meubel Jati Indah </h3>

        <br>

    </div>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="catalog/foto1.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="catalog/foto2.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="catalog/kursi.jpg" alt="...">

                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="catalog/kursi2.jpg" alt="...">

                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="catalog/meja1.jpg" alt="...">

                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="catalog/meja2.jpg" alt="...">

                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="well well-xl" style="background-color : rgb(32, 28, 28)">
            <p style="text-align:center; color:white"><strong><i>Copyright PPL Agroindustri</i></strong></p>
            <h1 style="text-align:center; color:white"> <i> About</i></h1>
            <p style="text-align:center; color:white"> <i> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Quae adipisci voluptatem provident aut fugit
                    fugiat magni unde necessitatibus cum, recusandae commodi rem quos exercitationem facilis ipsum sed
                    officiis ad. Consequatur.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque deleniti cupiditate suscipit
                    nesciunt
                    voluptate ea molestias illum rem cumque explicabo architecto ut ab, soluta odio iusto veritatis
                    corporis eligendi aliquid.</i>
            </p>
        </div>
    </div>
</body>

</html>