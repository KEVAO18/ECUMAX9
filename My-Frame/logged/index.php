<?php 

include '../web/route.php';

include '../web/controllers/config.php';

session_start();

if (!isset($_SESSION['user']) || !isset($_SESSION['email'])) {
  header("location: ../");

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, user-scalable=no'>
    <meta name="author" content="Kevin Orrego">
    <meta name="description" content="">
    <meta name="keywords" content=""/>
    <meta name="copyright" content="Kevin Orrego" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="cache-control" content="3600" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title><?=$appName?></title>

    <link rel="icon" href="../assets/media/<?=$icoName?>.svg">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css' rel='stylesheet'>

    <!-- css -->
    <link rel="stylesheet" href="../assets/styles/colores.css">
    <link rel="stylesheet" href="../assets/styles/margin.css">
    <link rel="stylesheet" href="../assets/styles/padding.css">
    <link rel="stylesheet" href="../assets/styles/wh.css">
    <link rel="stylesheet" href="../assets/styles/st1.css">
  </head>
  <body class="">

    <div class="bg-3">
      <div class="py-1 container">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link top-bar" href="https://kevaosportafolio.000webhostapp.com/" target="_blank"><i class="fas fa-info-circle"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-bar" href="http://github.com/KEVAO18" target="_blank"><i class="fab fa-github"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top scrolling-navbar color-1">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize" href="?p=dashboard">
          <?=$appName?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="barra">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href='#' id='modalActivate' type='button' data-toggle='modal' data-target='#menu'><i class="fas fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fas fa-bell"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='#' id='modalActivate' type='button' data-toggle='modal' data-target='#game'><i class="fas fa-chess"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <center>
            <div class="modal-body row">
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="?p=profile">profile</a>
              </div>
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="?p=tyc">Terms and Conditions</a>
              </div>
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="game" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Quickplay</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <center>
            <div class="modal-body row">
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=easy">Beginner</a>
              </div>
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=middle">what difference does it make?</a>
              </div>
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=hard">This is going to get ugly</a>
              </div>
              <div class="col-12">
                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=vh">Teacher</a>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>

    <?php
      logRoutes($appName);
    ?>
	<footer class='page-footer font-small bg-main'>

        <div class="bg-3">

          <div class='container'>

            <!-- Grid row-->
            <div class='row py-4 d-flex align-items-center'>

              <!-- Grid column -->
              <div class='col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0'>
                <h6 class='mb-0'>Are you ready to learn? Come with us.</h6>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>

        </div>

      <div class="container pt-4">
        <div class="row text-white">
          <div class="col-sm-12 col-md-8 py-2">
              <h5>Founder</h5>
              <p>Kevin Andres Orrego Martinez <br><span style='font-size: 12px;'>(FullStack web developer)</span></p>
              <p style='font-size: 12px;'><?=$date ?></p>
          </div>
          <div class="col-sm-12 col-md-4 py-2">
			  <!-- Links -->
              <h6 class='text-uppercase font-weight-bold'>Contact</h6>
              <p>
                <i class='fas fa-home mr-3'></i>Medellín - Antioquia Cll72 N°42 - 14</p>
              <p>
                <i class='fas fa-envelope mr-3'></i> <?=$email?></p>
              <p>
                <i class='fas fa-phone mr-3'></i> +57 312 689 9514</p>
          </div>
        </div>
      </div>
        <center class="text-white p-2">
          © 2019 Copyright: <?=$appName?>.
        </center>
    </footer>
    <!-- B -->
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Bootstrap tooltips -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
    <!-- Bootstrap core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <!-- MDB core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js'></script>
    <!-- scripts -->
  </body>
</html>
