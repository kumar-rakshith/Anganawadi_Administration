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
            <h3 class="page-title" style="color:skyblue;">Vaccination Details </h3>

          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">Add Vaccination Details</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">


                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Vaccination Name</label>
                          
                          <input type="text" class="form-control" placeholder="" name="vname" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Vaccination Date</label>
                          <input type="date" class="form-control"  name="vdate" autocomplete="off">
                        </div>
                      </div>
                      <div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">From Time</label>
                          <input type="time" class="form-control" placeholder="" name="vftime" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">To Time</label>
                          <input type="time" class="form-control" name="vttime" autocomplete="off">
                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" name="add">ADD</button>
                        <!-- <button type="reset" class="btn btn-info" >CANCEL</button> -->
                      </div>

                      
                    </div>

                  </div>
                  
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php include('connect.php');
    if(isset($_POST['add']))
    {
      $date=$_POST['vdate'];
      $vttime=$_POST['vftime'];
      $vtime=$_POST['vttime'];
      $name=$_POST['vname'];



      $qry=mysqli_query($con,"INSERT INTO `tbl_vaccination`(`v_id`, `v_name`, `date`, `fromtime`, `totime`) VALUES ('','$name','$date','$vttime','$vtime')")or die(mysqli_error($con));
      if($qry){
        echo '<script>alert("Vaccination added sucessfully ");window.location="viewvaccination.php"; </script>';
      }
      else{
        echo '<script>alert("failed");  </script>';
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