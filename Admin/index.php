<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $admin=new Admin();

  $admin->notLogged('admin', '../index');

  // $_SESSION['admin'] = 10;
  // echo $_SESSION['admin'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/custom_style.css">


</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "header.php";?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include "sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span> Home </h3>
              
            </div>
            
            <!-- <img src="assets/images/images_22.jpg" width="100%"> -->
              <?php 
                // $control->sessionMessage(); 

                if(isset($_SESSION['success_message'])){
                  unset($_SESSION['success_message']); 

              ?>


                  <div class="row" id="proBanner">
                    <div class="col-12">
                      <span class="d-flex align-items-center purchase-popup">
                        <p>You have logged in successfully</p>
                        <!-- <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a> -->
                        <a href="adminprofile.php" class="btn ml-auto purchase-button">Profile Settings</a>
                        <i class="mdi mdi-close" id="bannerClose"></i>
                      </span>
                    </div>
                  </div>
                
              <?php 

              }

              ?>
                 
              
              
                <div class="row">
                  <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                      <div class="card-body">
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">No.Of Staff <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">2</h2>
                      <!-- <h6 class="card-text">Increased by 60%</h6>  -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                      <div class="card-body">
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">No.Of Resident <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">2</h2>
                       <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                      <div class="card-body">
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">No.Of Child/Applicants <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                     <!--   <h2 class="mb-5">9</h2>  --->
                        <h6 class="card-text">Increased by 5%</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="clearfix">
                          <h4 class="card-title float-left">No.Of Applicants</h4>
                          <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                        </div>
                        <canvas id="visit-sale-chart" class="mt-4"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <canvas id="traffic-chart"></canvas>
                        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include "footer.php";?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
    <script src="../assets/js/jquery.min.js"></script>

    
  </body>
  </html>