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
          <li class="nav-item active">
            <a class="nav-link active" href="dash.php">
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
          <li class="nav-item">
            <a class="nav-link" href="dash_p.php">
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


    <!----<?php
////include_once('db.php');
///$idy=$_REQUEST['BookID'];


///$sqlt=mysqli_query($conn,"SELECT * FROM sign_up WHERE usename='$idy'")or die(mysqli_error($conn));
///while($row=mysqli_fetch_array($sqlt))
///{
 // $un=$row['usename'];
 // $_SESSION['usename']=$un;
  
  
//}
//$_SESSION['usename']=$un;
//?>---->

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



    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-5 col-lg-8">
              <div class="card card-stats mb-6 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
                      <span class="h2 font-weight-bold mb-0">$15.00</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Sign up bonus</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Sales value</h2>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="text-light ls-1">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
        </div>
        
            </div>
          </div>
        </div>
      

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