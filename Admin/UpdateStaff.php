
<?php  

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $admin=new Admin();

  $admin->notLogged('admin', '../index');


  include('connect.php'); 

  $uid = $_GET['sid'];
  $sql = " SELECT * from tbl_staff where  staff_id= '$uid' ";

  $res = mysqli_query($con,$sql);  

  $rows = mysqli_fetch_assoc($res);

  
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
            <h3 class="page-title" style="color:skyblue;">Staff </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">Update Staff</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <input type="hidden" name="scheme_id" class="form-control" value="<?php echo $rows['staff_id']; ?>">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Firstname</label>
                          <input type="text" class="form-control" placeholder="Staff Firstname" name="fname"  value="<?php echo $rows['staff_fname']; ?>" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Lastname</label>
                          <input type="text" class="form-control" placeholder="Staff Lastname" name="lname" value="<?php echo $rows['staff_lname']; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Image</label>
                          <img src="staffphoto/<?php echo $rows['image']; ?>" alt="No Image" height="100" width="200" class="img-rounded" >
                          <br>
                          
                          <input type="file" class="form-control" placeholder="" name="image" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Phone Number</label>
                          <input type="number" class="form-control" placeholder="Staff Phone Number"  name="phone" required="" value="<?php echo $rows['contact']; ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <textarea class="form-control" placeholder="address"  name="address" ><?php echo $rows['address']; ?></textarea>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Gender</label>
                          <input type="radio" class="radio" name="r1" value="Female"<?php if($rows['gender']=="Female"){ echo "checked";}?>>Female
                          <input type="radio" class="radio" name="r1" value="Male"<?php if($rows['gender']=="Male"){ echo "checked";}?>>Male<br>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" placeholder="Email"  name="email" required value="<?php echo $rows['email']; ?>" >
                          
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
                  </div>
                </form>

                <?php
                include 'connect.php';
                if(isset($_POST["update"]))
                {
                  if(isset($_FILES['image']['name']))
                  {
                    $file = rand(1000,100000)."-".$_FILES['image']['name'];
                    $file_loc = $_FILES['image']['tmp_name'];
                    $file_size = $_FILES['image']['size'];
                    $imgtype = $_FILES['image']['type'];
                    $folder="staffphoto/";
                    $new_size = $file_size/2048;  
                    $new_file_name = strtolower($file);
                    $final_file=str_replace(' ','-',$new_file_name);
                    
                    if(move_uploaded_file($file_loc,$folder.$final_file))
                    {           
                      $ufname=$_POST['fname'];
                      $ulname=$_POST['lname'];
                      $ugender=$_POST['r1'];
                      $uemail=$_POST['email'];
                      $ucontact=$_POST['phone'];
                      $uadd=$_POST['address'];
                      
                      $qry=mysqli_query($con,"UPDATE `tbl_staff` SET `staff_fname`='$ufname',`staff_lname`='$ulname',`gender`='$ugender',`image`='$final_file',`contact`='$ucontact',`email`='$uemail',`address`='$uadd' WHERE `staff_id`='$uid'"); 
                      if($qry)
                      {
                        echo "<script>alert('Staff has been updated successfully');window.location='ViewStaff.php'; </script>";
                      }
                      else{
                       echo "<script>alert('Failed to update staff');</script>";
                     }
                     
                   }
                 }  
                 $ufname=$_POST['fname'];
                 $ulname=$_POST['lname'];
                 $ugender=$_POST['r1'];
                 $ucontact=$_POST['phone'];
                 $uemail=$_POST['email'];
                 $uadd=$_POST['address'];
                 $qry=mysqli_query($con,"UPDATE `tbl_staff` SET `staff_fname`='$ufname',`staff_lname`='$ulname',`gender`='$ugender',`contact`='$ucontact',`email`='$uemail',`address`='$uadd' WHERE `staff_id`='$uid'") or die(mysqli_error($con));
                 if($qry)
                 {
                  echo "<script>alert('Updated staff successfully');window.location='ViewStaff.php'; </script>";
                }
                else{
                  echo "<script>alert('Failed update staff'); </script>";
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