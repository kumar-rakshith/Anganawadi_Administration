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
            <h3 class="page-title" style="color:skyblue;">Add Staff </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">ADD STAFF</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">


                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Firstname</label>
                          <input type="text" class="form-control" placeholder="Enter Staff Firstname" name="fname" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Lastname</label>
                          <input type="text" class="form-control" placeholder="Enter Staff Lastname" name="lname" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Image</label>
                          
                          <input type="file" class="form-control" placeholder="" name="image" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Staff Phone Number</label>
                          <input type="number" class="form-control" placeholder="Enter Staff Phone Number" id="contact" name="contact" autocomplete="off" onKeyPress="if(this.value.length==10) return false;">
                          <small class="form-text text-muted" id="phoneblock"></small>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <textarea class="form-control" placeholder="Enter address"  name="address" ></textarea>
                        </div>
                      </div>
                     <!--  <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" placeholder="Enter Password"  name="password" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" placeholder="Enter Confirm Password"  name="cpassword" >
                        </div>
                      </div> -->
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Gender</label>
                          <input type="radio" class="radio" name="r1" value="Female" class="radio">Female
                          <input type="radio" class="radio" name="r1" value="Male" class="radio">Male<br>
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="Male" checked>Male</label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender" value="Female">Female</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Email</label>
                              <input type="email" id="email" class="form-control" placeholder="Enter Email"  name="email" autocomplete="off" required >
                              <small class="form-text text-muted" id="emailblock"></small>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" id="sbtn" name="add">ADD</button>
                        <button type="reset" class="btn btn-info" >CANCEL</button>
                      </div>


                    </form>

                    <?php include('connect.php');
                    if(isset($_POST['add']))
                    {

                  //Insert Code
                      $file = rand(1000,100000)."-".$_FILES['image']['name'];
                      $file_loc = $_FILES['image']['tmp_name'];
                      $file_size = $_FILES['image']['size'];
                      $imgtype = $_FILES['image']['type'];
                      $folder="staffphoto/";
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

                        $ufname=$_POST['fname'];
                        $ulname=$_POST['lname'];
                        $ugender=$_POST['r1'];

                        $ucontact=$_POST['contact'];
                        $email=$_POST['email'];
                    // $upassword=$_POST['password'];
                    // $ucpassword=$_POST['cpassword'];
                        $uadd=$_POST['address'];





                    //Send Message
                        require('../sms/textlocal.class.php');

                    //Generate Password
                        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                    $pass = array(); //remember to declare $pass as an array
                    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                    for ($i = 0; $i < 8; $i++) {
                      $n = rand(0, $alphaLength);
                      $pass[] = $alphabet[$n];
                    }
                    $password = implode($pass);
                    //End Generate Password



                    $textlocal = new Textlocal(false, false, '+1T86CwG4qA-BzXrIPvmwCfWD5UugqdAx49NM0xo0S');
                    // $textlocal = new Textlocal(false, false, 'UDxi2GcQpW8-1dRIwOlQAk8YP6TmAXXuMQj8VqEmVj');
                    $numbers = array($ucontact);
                    $sender = 'TXTLCL';
                    $message = "Password: ".$password."\r\nEmail: ".$email;
                    // $message = "Hello \r\n name ".$name."\r\ngood news\r\nI __.";

                    try {
                      $result = $textlocal->sendSms($numbers, $message, $sender);
                        // print_r($result);
                    } catch (Exception $e) {
                        // echo $message;
                      die('Error: ' . $e->getMessage());
                    }
                    //End Send Message





                      // $q=mysqli_query($con,"SELECT * FROM tbl_staff where email='$email'")or die(mysqli_error($con));
                      // $n=mysqli_num_rows($q);
                      // if($n>0){
                      //   echo '<script>alert("Email is already taken");</script>';

                      // }else{
                    $qry=mysqli_query($con,"INSERT INTO `tbl_staff`(`staff_id`, `staff_fname`, `staff_lname`, `gender`, `image`, `contact`, `email`, `address`,`password`) VALUES ('','$ufname','$ulname','$ugender','$final_file','$ucontact','$email','$uadd','$password')")or die(mysqli_error($con));
                    if($qry)
                    {

                      echo '<script>alert("Staff added sucessfully"); window.location="ViewStaff.php"; </script>';
                    }
                    else{
                      echo '<script>alert("failed to add staff");</script>';
                    }
                      // }

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

<script src="../assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $("#email").change(function(){
        var email = $("#email").val();
            // alert(email);
            $.ajax({ 
                type: "POST", 
                url: "../Controller/validation_test.php",
                data: {
                    stfemail:email
                },
                dataType: 'text',
                success: function(html){
                    if(html=='Email Exists'){
                        $('#emailblock').html('<label style="color: #fe7c96;float: left;"><b>&nbsp</b>Email Id already exists</label>');
                        $('#email').css('border-color','#fe7c96');
                        $('#sbtn').attr('style','pointer-events: none');
                        $('#sbtn').attr('disabled','true');
                        // alert("Email already exists");
                    }
                    else{
                        $('#emailblock').html("We'll never share your email with anyone else.");
                        $('#email').css('border-color','#c7c7c7');
                        $('#sbtn').attr('style','pointer-events: all');
                        $('#sbtn').removeAttr('disabled');
                        // alert("Email does not exists");
                    }
                }

            });
      });

      $("#contact").change(function(){
        var contact = $("#contact").val();
            // alert(email);
            $.ajax({ 
                type: "POST", 
                url: "../Controller/validation_test.php",
                data: {
                    stfcontact:contact
                },
                dataType: 'text',
                success: function(html){
                    if(html=='Phone Exists'){
                        $('#phoneblock').html('<label style="color: #fe7c96;float: left;"><b>&nbsp</b>Phone number already exists</label>');
                        $('#contact').css('border-color','#fe7c96');
                        $('#sbtn').attr('style','pointer-events: none');
                        $('#sbtn').attr('disabled','true');
                        // alert("Email already exists");
                    }
                    else{
                        $('#phoneblock').html("");
                        $('#contact').css('border-color','#c7c7c7');
                        $('#sbtn').attr('style','pointer-events: all');
                        $('#sbtn').removeAttr('disabled');
                        // alert("Email does not exists");
                    }
                }

            });
      });
    });
  </script>


</body>
</html>