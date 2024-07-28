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
            <h3 class="page-title" style="color:skyblue;">Add Child details </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">ADD Child</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Child Name</label>
                          <input type="text" class="form-control" placeholder="Child name" required name="cname"u atocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Child Image</label>
                          
                          <input type="file" class="form-control" placeholder="" required name="image" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Father Name</label>
                          <input type="text" class="form-control" placeholder="Father Name" required name="fname" autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Mother Name</label>
                          <input type="text" class="form-control" placeholder="Mother Name" required name="mname" autocomplete="off" >
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label"> Phone Number</label>
                          <input type="number" class="form-control" placeholder="Parent Phone Number" required  name="contact" autocomplete="off" required onKeyPress="if(this.value.length==10) return false;">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Gender</label><br/>
                          <input type="radio" class="col form-check-input" name="r1" value="Female" class="form-control">Female<br/>
                          <input type="radio" class="col form-check-input" name="r1" value="Male" class="form-control">Male<br/>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <textarea class="form-control" placeholder="address" required name="address" ></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Date Of Birth</label>
                          <input type="date" class="form-control" placeholder="Date Of Birth" required name="dob" id="dob" onchange="showDate(this.value);">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Date Of Join</label>
                          <input type="date" class="form-control" placeholder="Date Of Join" required name="doj"
                          value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                      </div>
                     <!--  <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Age</label>
                          <input type="number" class="form-control" placeholder="age" required value="0" name="age" id="age">
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Father aadhar number</label>
                          <input type="text" pattern="\d{4}[\-]\d{4}[\-]\d{4}" title="0nly 12 digits for example 1111-2222-1111" class="form-control" placeholder="father adhar number" required name="fadhar" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Mother aadhar number</label>
                          <input type="text" pattern="\d{4}[\-]\d{4}[\-]\d{4}" title="0nly 12 digits for example 1111-2222-1111" class="form-control" placeholder="mother adhar number" required  name="madhar" autocomplete="off">
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                   <!--  <button type="submit" class="btn btn-info" name="add">Cencel</button>
                   <a href="home.php" class="btn btn-info btn-sm">Back</a> -->
                 </div>
               </form>
             </div>
           </div>
         </div>
         
         
         
         
         <?php include('connect.php');
         if(isset($_POST['add']))
         {
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
            $cname=$_POST['cname'];
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $ugender=$_POST['r1'];

            $contact=$_POST['contact'];
            $fadharn=$_POST['fadhar'];
            $madharn=$_POST['madhar'];
            $dob=$_POST['dob'];
          // $cage=$_POST['age'];
            $doj=$_POST['doj'];
            $add=$_POST['address'];
            
            $qry=mysqli_query($con,"INSERT INTO `tbl_child`(`child_id`, `c_name`, `fname`, `mname`, `phone`, `f_adharno`, `m_adharno`, `Address`, `dob`, `doj`, `image`, `gender`) VALUES('','$cname','$fname','$mname','$contact','$fadharn','$madharn','$add','$dob','$doj','$final_file','$ugender')")or die(mysqli_error($con));
            if($qry)
            {

              echo '<script>alert(" child added successfully!! "); window.location="viewchild.php"; </script>';
            }
            else{
              echo '<script>alert("failed to add child");</script>';
            }
            
            
            
          }
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