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
            <h3 class="page-title" style="color:skyblue;">Add Schemes </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">ADD SCHEMES</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Scheme Name</label>
                          <input type="text" class="form-control" placeholder="Enter Scheme Name" name="schemes" autocomplete="off" pattern="[A-Za-z\s]+" title="Accept only capital and small letters"  >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Scheme Description</label>
                          <textarea class="form-control" placeholder="Enter Scheme Description" name="desc" ></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Scheme Image</label>
                          
                          <input type="file" class="form-control" placeholder="" name="image" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Scheme Add Date</label>
                          <input type="date" class="form-control" placeholder="Enter Scheme Add Date"  name="addname" min="<?php echo date('Y-m-d')?>" value="<?php echo date('Y-m-d')?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">From Date</label>
                          <input type="date" class="form-control" placeholder="Enter From Date"  name="fromname" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">To  Date</label>
                          <input type="date" class="form-control" placeholder="Enter To Date"  name="toname"  >
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="add">ADD</button>
                    <button type="reset" class="btn btn-info" >CANCEL</button>
                  </div>
                  
                </form>

                <?php
                include('connect.php');
                
                if(isset($_POST['add'])){

                  $file = rand(1000,100000)."-".$_FILES['image']['name'];
                  $file_loc = $_FILES['image']['tmp_name'];
                  $file_size = $_FILES['image']['size'];
                  $imgtype = $_FILES['image']['type'];
                  $folder="photos/";
                  $new_size = $file_size/2048;  
                  $new_file_name = strtolower($file);
                  $final_file=str_replace(' ','-',$new_file_name);
                  if($imgtype != "image/jpg" && $imgtype != "image/png" && $imgtype != "image/jpeg" ) {
                    echo "<script>alert('File type is not compatible');
                  </script>";
                }
                else {
                  if(move_uploaded_file($file_loc,$folder.$final_file))
                  {           
                    $s_name=$_POST['schemes'];
                    $s_des=$_POST['desc'];

                    $s_adddate=$_POST['addname'];
                    $s_fromdate=$_POST['fromname'];
                    $s_todate=$_POST['toname'];
                    
                    $qry=mysqli_query($con,"SELECT * FROM tbl_scheme where sc_name='$s_name'");
                    $rows=mysqli_num_rows($qry);
                    if($rows==0)
                    {
                     
                     
                     $qry=mysqli_query($con,"INSERT INTO `tbl_scheme`(`sc_id`, `sc_name`, `sc_desp`, `add_date`, `Scheme_fromDate`, `Scheme_ToDate`, `image`) VALUES  ('','$s_name','$s_des','$s_adddate','$s_fromdate','$s_todate','$final_file')") or die(mysqli_error($con));
                     
                     if($qry)
                     {
                      
                      echo '<script>alert("Scheme added successfully ");window.location="ViewScheme.php"; </script>';
                    }
                    else{
                      echo '<script>alert("failed add scheme");  </script>';
                    }
                    
                  }
                  else{
                    echo '<script>alert("Scheme record already exists");  </script>';
                  }
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