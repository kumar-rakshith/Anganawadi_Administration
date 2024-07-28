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
            <h3 class="page-title" style="color:skyblue;">Give Feedback </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">Feedback</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      
                      
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Feedback</label>
                          <textarea type="text" class="form-control"  name="feedback" autocomplete="off" ></textarea>
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="add">ADD</button>
                    <!-- <button type="reset" class="btn btn-info" >CANCEL</button> -->
                  </div>
                  
                </form>

                <?php include('connect.php');
                if(isset($_POST['add']))
                {
                  $name=$_POST['feedback'];
                  
                  
                  

                  $qry=mysqli_query($con,"INSERT INTO `tbl_feedback`(`feedback`) VALUES  ('$name')")or die(mysqli_error($con));
                  if($qry){
        // echo '<script>alert("Camp added successfully");window.location="AddCenter.php"; </script>';
                  }
                  else{
                    echo '<script>alert("feedback sent");  </script>';
                  }
                }
                ?>
                
              </div>
            </div>
          </div>
          
        </div>
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