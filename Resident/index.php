<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $resident=new Resident();

  $resident->notLogged('resident', '../index');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
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
                      <!--  <a href="residentprofile.php" class="btn ml-auto purchase-button">Profile Settings</a> -->
                        <i class="mdi mdi-close" id="bannerClose"></i>
                      </span>
                    </div>
                  </div>
                
              <?php 

              }

              ?>
            
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
  </body>
  </html>