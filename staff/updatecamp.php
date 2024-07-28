<?php

  include('connect.php'); 

  $uid = $_GET['cid'];
  $sql = " SELECT * from tbl_camp where  cid= '$uid' ";

  $res = mysqli_query($con,$sql);  
  $rows = mysqli_fetch_assoc($res);

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $staff=new staff();

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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

     <!-- Sweet Alerts -->
  <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
  <script src="../assets/js/sweetalert2.all.min.js"></script>

<!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/custom_style.css">

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
            <h3 class="page-title" style="color:#b66dff;">Grocery Details</h3>
          </div>
          <!--Undu-->
          <div class="col-lg-10 offset-lg-1 grid-margin stretch-card">
            <div class="card">
              
              <div class="card-body">
                <!--Undu-->
                <!-- <h4 class="card-title"> update Grocery Details</h4> -->
              <!--  <p class="card-description"><code>All Grocery Details</code>
                </p> -->
                    <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddCenter()">Add Center</button>
                    <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                    <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">UPDATE g</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">name</label>
                          <input type="text" class="form-control" placeholder="Enter gt Name" name="name" autocomplete="off" pattern="[A-Za-z\s]+" title="Accept only capital and small letters" value="<?php echo $rows['name']; ?>" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" placeholder="Enter Scheme Description" name="discription"> <?php echo $rows['discription']; ?></textarea>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
                    
                  </div>
</form>

                <?php
                include('connect.php');
                if(isset($_POST["update"])){
                   {  
                    $name=$_POST['name'];
                    $discription=$_POST['discription'];

                   
                    
                    $qry=mysqli_query($con,"UPDATE `tbl_camp` SET `name`='$name', `discription`='$discription' WHERE `cid`='$uid'") or die(mysqli_error($con));
                    
                    if($qry)
                    {
                      echo '<script>alert("grocery has been updated successfully ");window.location="viewcamp.php"; </script>';
                    }
                    else{
                      echo '<script>alert("failed to update grocery");  </script>';
                    }
                  
                
                    
                  


                $name=$_POST['name'];
                $discription=$_POST['discription'];


               

                $qry=mysqli_query($con,"UPDATE `tbl_camp` SET `name`='$name', `discription`='$discription' WHERE `cid`='$uid'") or die(mysqli_error($con));
                    
                    if($qry)
                {
                  echo '<script>alert("grocery has been updated successfully ");window.location="viewcamp.php"; </script>';
                }
                else{
                  echo '<script>alert("failed to update scheme");  </script>';
                }
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