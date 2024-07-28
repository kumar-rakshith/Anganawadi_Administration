<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $staff=new Staff();

  $staff->notLogged('staff', '../index');

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
  <!-- End Plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include "header.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php include "sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title" style="color:skyblue;">Add Grocery details </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">ADD GROCERY Details</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Grocery Type</label>
                          
                          <input type="text" class="form-control" placeholder="Enter grocery type" required name="gtype" autocomplete="off"  id="gtype">
                          <span id="ftypespan"></span>

                        </div>
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Date</label>
                          <input type="date" class="form-control"  name="date" autocomplete="off" required placeholder="Enter schedule">
                        </div>
                      </div> -->
                      <div>
                        
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Quantity</label>
                          <input type="text" class="form-control" placeholder="" required name="quantity" autocomplete="off">
                        </div>
                      </div>
                      
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="add" id="add">ADD</button>
                    <!--  <button type="reset" class="btn btn-info" >CANCEL</button> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php include('connect.php');
          if(isset($_POST['add']))
          {
            $type=$_POST['gtype'];
      // $date=$_POST['date'];
            $quantity=$_POST['quantity'];
            
            
            
            

            $qry=mysqli_query($con,"INSERT INTO `tbl_grocery`(`gtype`, `quantity`) VALUES  ('$type','$quantity')")or die(mysqli_error($con));
            if($qry){
              echo '<script>alert("Grocery added sucessfully ");window.location="viewgrocery.php"; </script>';
            }
            else{
              echo '<script>alert("failed add a grocery");  </script>';
            }
          }
          ?>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
  </html>