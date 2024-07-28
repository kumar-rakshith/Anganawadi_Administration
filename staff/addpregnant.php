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
            <h3 class="page-title" style="color:skyblue;">Add Pregnant women details </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">ADD PREGNANT WOMEN DETAILS</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" required autocomplete="off">
                        </div>
                      </div>
                      
                      <!--  <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Husband/Father name</label>
                          <input type="text" class="form-control" name="husband/father name " required autocomplete="off">
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Phone</label>
                          <input type="phone" class="form-control" name="phone" required autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" required autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">childrens</label>
                          
                          <input type="text" class="form-control"  name="child" required autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Weight</label>
                          <input type="text" class="form-control"   name="weight" required autocomplete="off">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Height</label>
                          <input type="text" class="form-control"  name="height" required autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Age</label>
                          <input type="text" class="form-control"  name="age" required autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Current Month</label>
                          <input type="text" class="form-control"  name="month" required autocomplete="off" >
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="add">ADD</button>
                    <!--  <button type="reset" class="btn btn-info" >CANCEL</button> -->
                  </div>
                  
                </form>

                <?php include('connect.php');
                if(isset($_POST['add']))
                {
                  $name=$_POST['name'];
                  $phone=$_POST['phone'];
                  $address=$_POST['address'];
      // $husband=$_POST['husband'];
                  $child=$_POST['child'];
                  $weight=$_POST['weight'];
                  $height=$_POST['height'];
                  $age=$_POST['age'];
                  $month=$_POST['month'];
                  
                  
                  

                  $qry=mysqli_query($con,"INSERT INTO `tbl_pregnant`(`name`, `phone`,`address`, `child`, `weight`,`height`,`age`,`month`) VALUES  ('$name','$phone','$address','$child','$weight','$height','$age','$month')")or die(mysqli_error($con));
                  if($qry){
        // echo '<script>alert("Camp added successfully");window.location="AddCenter.php"; </script>';
                  }
                  else{
                    echo '<script>alert("failed add a food");  </script>';
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