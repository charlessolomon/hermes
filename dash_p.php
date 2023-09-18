<?php
include_once('db.php');
session_start();
$un=$_SESSION['usename'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Hermes Mining
  </title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/log.png"/>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/dash.css?v=1.1.2" rel="stylesheet" />

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="mining.html">
        <img src="images/log.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Hash Prices</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Hash News</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="images/log.png
">
              </span>
            </div>
          </a>
          
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="mining.html">
                <img src="images/log.png">
                HERMES MINING
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dash.php">
              <i class="ni ni-tv-2 text-primary"></i> Overview
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash_j.php">
              <i class="ni ni-planet text-blue"></i> Journey
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash_A.php">
              <i class="ni ni-collection text-purple"></i> Activities
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="dash_p.php">
              <i class="ni ni-bullet-list-67 text-info"></i> Packages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ni ni-key-25 text-red"></i> Log Out
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        
      </div>
    </div>
  </nav>

  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="dash.php">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item">
            <a class="nav-link pr-0" href="#" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="mb-0 text-sm  font-weight-bold"> </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $un;?></span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>


            <?php include_once("packages.php")?>


      <!-- Footer -->
      <footer class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted"><span>Copyright</span>
              © 2023 <a href="https://www.hermesmining.com" class="font-weight-bold ml-1" target="_blank">HERMES MINING</a>
            </div>
          </div>
          
              
        </div>
      </div>
    </footer>

  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>