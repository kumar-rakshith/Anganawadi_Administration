<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $admin=new Admin();

  $admin->notLogged('admin', '../index');

  $id = $_SESSION['admin'];

  $stmt = $admin->get_userinfo($id);
  $userprofile = $stmt->fetch(PDO::FETCH_ASSOC);

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

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/custom_style.css">
  <link rel="stylesheet" href="../assets/css/image_upload.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.css">


  <style type="text/css">
    .form-control{
      height: 35px;
    }

    .avatar-upload .avatar-edit:hover input + label:after {
       
        color: #cc6dff;
       
    }
  </style>

  
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
              <h3 class="page-title"> Profile </h3>
                  
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <!-- <div class="border-bottom text-center pb-4">
                          <div class="container">
                            <img src="../assets/img/default-dp-2.png" alt="profile" class="img-lg rounded-circle mb-3">
                            <div class="overlay img-lg rounded-circle mb-3">
                            <a class="icon" title="Change Image" id="change_image" data-toggle="modal" data-target="#exampleModal" style="color:white">
                              <i class="mdi mdi-tooltip-edit"></i>
                            </a>
                            </div>
                          </div>
                        </div>-->

                        <div class="container">
                          <div class="avatar-upload">
                            <div class="avatar-edit">
                              <form id="image_preview" action="Controller/upload_image.php" method="POST" enctype="multipart/form-data">
                                <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg">
                                <label for="imageUpload"></label>
                              </form>

                                <div > </div>
                                <label id="upload_check"></label>

                                <span > </span>
                                <label id="upload_cancel"></label>

                            </div>
                            
                            <div class="avatar-preview">
                              <div id="imagePreview" style="background-image: url(../assets/img/<?php echo $userprofile['image'];?>);"></div>
                            </div>
                          </div>
                          <div class="row">
                            <!-- <button type="button" class="btn btn-inverse-primary col-lg-4 offset-md-1" id="back" name="add">Cancel</button> -->
                            <!-- <button type="button" class="btn btn-primary col-lg-4 offset-md-2" id="add" name="add">Upload</button> -->
                            <!-- <img src="../assets/img/default-dp-2.png" alt="profile" class="img-sm rounded-circle mb-2 offset-md-6">
                            <img src="../assets/img/default-dp-2.png" alt="profile" class="img-sm rounded-circle mb-2 offset-md-0"> -->

                          </div>

                        </div>
                        


                        <div id="details">
                          <div class="py-4">
                            <!-- Show Message -->
                            <?php $control->sessionMessage(); ?>

                            <p class="clearfix">
                              <span class="float-left"> Role </span>
                              <span class="float-right text-muted"> Admin </span>
                            </p>
                            <p class="clearfix">
                              <span class="float-left"> Phone </span>
                              <span class="float-right text-muted"> <?php echo $userprofile['phone']; ?> </span>
                            </p>
                            <p class="clearfix">
                              <span class="float-left"> Mail </span>
                              <span class="float-right text-muted"> <?php echo $userprofile['email']; ?> </span>
                            </p>
                            <p class="clearfix">
                              <span class="float-left"> Date Of Birth </span>
                              <span class="float-right text-muted">
                                <?php $newDate = date("d-M-Y", strtotime($userprofile['dob'])); echo $newDate; ?>
                              </span>
                            </p>
                            <p class="clearfix">
                              <span class="float-left"> Address </span>
                              <span class="float-right text-muted">
                                <?php echo $userprofile['address']; ?>
                              </span>
                            </p>

                            <br>
                            <button id="edit_profile" class="btn btn-gradient-primary btn-block">Edit Profile</button>
                            
                          </div>
                        </div>
                        <form id="update_form" action="Controller/updateprofile.php" method="POST">
                          <div class="py-4">
                          <p class="clearfix">
                            <span class="float-left"> Role </span>
                            <span class="float-right text-muted"> Admin </span>
                          </p>
                          <p class="clearfix row">
                            <span class="float-left col-md-6"> Name </span>
                            <input type="text" class="form-control col-md-6" placeholder="" id="name" name="name" autocomplete="off" value="<?php echo $userprofile['A_name']; ?>">
                          </p>
                          <p class="clearfix row">
                            <span class="float-left col-md-6"> Phone </span>
                            <input type="number" class="form-control col-md-6" placeholder="" id="phone" name="phone" autocomplete="off" value="<?php echo $userprofile['phone']; ?>">
                          </p>
                          <p class="clearfix row">
                            <span class="float-left col-md-6"> Mail </span>
                            <input type="text" class="form-control col-md-6" placeholder="" id="email" name="email" autocomplete="off" value="<?php echo $userprofile['email']; ?>">
                          </p>
                          <p class="clearfix row">
                            <span class="float-left col-md-6"> Date Of Birth </span>
                            <input type="date" class="form-control col-md-6" placeholder="" id="dob" name="dob" autocomplete="off" value="<?php echo $userprofile['dob']; ?>">
                            
                          </p>
                          <p class="clearfix row">
                            <span class="float-left col-md-6"> Address </span>
                            <textarea  type="textarea" class="form-control col-md-6" placeholder="" id="address" name="address" autocomplete="off"><?php echo $userprofile['address']; ?>
                            </textarea> 
                          </p>
                          
                          <br>
                          <span class="row">
                            <button type="button" class="btn btn-inverse-primary col-md-3 " id="back">Back</button>
                            <button type="submit" name="add" class="btn btn-gradient-primary col-md-8 offset-md-1">Update Profile</button>
                          </span>

                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h3><?php echo $userprofile['A_name']; ?></h3>
                            <div class="d-flex align-items-center">
                              <h5 class="mb-0 mr-2 text-muted">Admin</h5>
                              <div class="br-wrapper br-theme-css-stars"><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2"></a><a href="#" data-rating-value="3" data-rating-text="3"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="mt-4 py-2 border-top border-bottom">
                          <ul class="nav profile-navbar">
                            <li class="nav-item" id="notification_tab">
                              <a class="nav-link">
                                <i class="mdi mdi-newspaper"></i> Notifications </a>
                            </li>
                            <li class="nav-item" id="calender_tab">
                              <a class="nav-link">
                                <i class="mdi mdi-calendar"></i> Calender </a>
                            </li>
                            <li class="nav-item" id="change_tab">
                              <a class="nav-link">
                                <i class="mdi mdi-account-outline"></i> Change Password </a>
                            </li>
                          </ul>
                        </div>
                        <!--  <div class="profile-feed" id="notification_content">

                          <br>
                          <div class="d-flex align-items-start profile-feed-item border-bottom">
                            <img src="assets/images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle">
                            <div class="ml-4">
                              <h6> Mason Beck <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                              </h6>
                              <p> There is no better advertisement campaign that is low cost and also successful at the same time. </p>
                              <p class="small text-muted mt-2 mb-0">
                                <span>
                                  <i class="mdi mdi-star mr-1"></i>4 </span>
                                <span class="ml-2">
                                  <i class="mdi mdi-comment mr-1"></i>11 </span>
                                <span class="ml-2">
                                  <i class="mdi mdi-reply"></i>
                                </span>
                              </p>
                            </div>
                          </div>

                          <br>
                          <div class="d-flex align-items-start profile-feed-item border-bottom">
                            <img src="assets/images/faces/face16.jpg" alt="profile" class="img-sm rounded-circle">
                            <div class="ml-4">
                              <h6> Willie Stanley <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                              </h6>
                              <img src="assets/images/samples/1280x768/12.jpg" alt="sample" class="rounded mw-100">
                              <p class="small text-muted mt-2 mb-0">
                                <span>
                                  <i class="mdi mdi-star mr-1"></i>4 </span>
                                <span class="ml-2">
                                  <i class="mdi mdi-comment mr-1"></i>11 </span>
                                <span class="ml-2">
                                  <i class="mdi mdi-reply"></i>
                                </span>
                              </p>
                            </div>
                          </div>

                          <br>
                          <div class="d-flex align-items-start profile-feed-item border-bottom">
                            <img src="assets/images/faces/face19.jpg" alt="profile" class="img-sm rounded-circle">
                            <div class="ml-4">
                              <h6> Dylan Silva <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                              </h6>
                              <p> When I first got into the online advertising business, I was looking for the magical combination that would put my website into the top search engine rankings </p>
                              <img src="assets/images/samples/1280x768/5.jpg" alt="sample" class="rounded mw-100">
                              <p class="small text-muted mt-2 mb-0">
                                <span>
                                  <i class="mdi mdi-star mr-1"></i>4 </span>
                                <span class="ml-2">
                                  <i class="mdi mdi-comment mr-1"></i>11 </span>
                                <span class="ml-2">
                                  <i class="mdi mdi-reply"></i>
                                </span>
                              </p>
                            </div>
                          </div>
                        </div> -->
                        <div id="calender_content">
                        </div>
                        <div id="change_content" class="col-md-6 offset-md-3">
                           <form class="m-t-md" method="post" action="Controller/updateprofile.php" id="login_form4">
                            <div class="form-group ">
                                <input type="hidden" name="id" id="identifier" class="form-control">
                            </div>
                          
                            <div class="form-group">
                                <label class="" for="exampleInputEmail1">Current Password</label>
                                <input type="password" name="current_password" min="8" class="form-control" id="current_password" required="" placeholder="Current Password">
                                <small class="form-text text-muted" id="wrongblock"></small>
                            </div>
                            <br>
                            <div class="form-group" id="passblock">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="password" name="password" min="8" class="form-control" id="password" pattern="^^[a-zA-Z0-9]{8,16}$" required="" placeholder="Set New Password" title="Must Be Atleast 8 Characters And Less Than 17 Characters. Wihte Spaces Not Allowed">
                            </div>

                            <div class="form-group" id="con_passblock" style="display:none">
                                <label for="exampleInputEmail1">Retype New Password</label>
                                <input type="password" name="con_password" class="form-control" id="con_password" pattern="^[a-zA-Z0-9]{8,16}$" required="" placeholder="Confirm Password" title="Must Be Atleast 8 Characters And Less Than 17 Characters">
                            </div>
                         
                            <button type="submit" id="cng_pswd" name="cng_pswd" class="btn btn-block btn-inverse-primary btn-lg font-weight-medium auth-form-btn" >Change Password</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer> -->
          <!-- partial -->
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
    <script src="../assets/js/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        $("#upload_check").hide();
        $("#upload_cancel").hide();



        $("#notification_tab").css("color", "#b66dff");
        $("#update_form").hide();
        $("#change_content").hide();


        $("#notification_tab").click(function(){
          $("#notification_tab").css("color", "#b66dff");
          $("#calender_tab").css("color", "black");
          $("#change_tab").css("color", "black");


          $("#notification_content").show(500);
          $("#calender_content").hide(500);
          $("#change_content").hide(500);

        });

        $("#calender_tab").click(function(){
          $("#notification_tab").css("color", "black");
          $("#calender_tab").css("color", "#b66dff");
          $("#change_tab").css("color", "black");


          $("#notification_content").hide(500);
          $("#calender_content").show(500);
          $("#change_content").hide(500);

        });

        $("#change_tab").click(function(){
          $("#notification_tab").css("color", "black");
          $("#calender_tab").css("color", "black");
          $("#change_tab").css("color", "#b66dff");


          $("#notification_content").hide(500);
          $("#calender_content").hide(500);
          $("#change_content").show(500);

        });

        $("#edit_profile").click(function(){
          $("#update_form").show();
          $("#details").hide(400);
        });

        $("#back").click(function(){
          $("#update_form").hide(500);
          $("#details").show(700);
        });


        // $("#change_image").click(function(){
        //   alert("");
        // });



        $('#password').blur(function(e){
            
            if(($('#password').val())!=''){

                $('#con_passblock').css("display","block");

            }else{

                $('#con_passblock').css("display","none");

            }

            var conf = $('#con_password').val();
            var pass = $('#password').val();

            if(conf!=pass && conf!=""){

                $('#con_password').val("");
                Swal.fire({
                  position: 'center',
                  type: 'warning',
                  title: 'Confirm Password Is Incorrect',
                  customClass: 'swal-wide',
                  showConfirmButton: false,
                  timer: 2600
                })
            }

        });

        $('#con_password').blur(function(e){
            
            var conf = $('#con_password').val();
            var pass = $('#password').val();

            if(conf!=pass){

                $('#con_password').val("");
                Swal.fire({
                  position: 'center',
                  type: 'warning',
                  title: 'Retyped Password Is Incorrect',
                  customClass: 'swal-wide',
                  showConfirmButton: false,
                  timer: 2000
                })
            }

        });



        $("#current_password").change(function(){
          var c_pswd = $("#current_password").val();
          $.ajax({ 
              type: "POST", 
              url: "Controller/updateprofile.php",
              data: {
                  c_pswd:c_pswd
              },
              dataType: 'text',
              success: function(html){
                  if(html=='Correct'){
                      $('#wrongblock').html("");
                      $('#current_password').css('border-color','#c7c7c7');
                      $('#cng_pswd').attr('style','pointer-events: all');
                      $('#cng_pswd').removeAttr('disabled');
                      // alert("Email already exists");
                  }
                  else{
                      $('#wrongblock').html('<label style="color: #fe7c96;;float: left;"><b>&nbsp</b>Current Password Is Incorrect</label>');
                      $('#current_password').css('border-color','#fe7c96');
                      $('#cng_pswd').attr('style','pointer-events: none');
                      $('#cng_pswd').attr('disabled','true');
                      // alert("Email does not exists");
                  }
              }

          });
        });

        

      });
    </script>


    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script id="rendered-js">
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#imageUpload").change(function () {
        readURL(this);
        // $("#image_preview").submit();
        $("#image_preview").hide();
        $("#upload_check").show(1000);
        $("#upload_cancel").show(1000);
      });

      $("#upload_check").click(function () {
        $("#image_preview").submit();
      });

      $("#upload_cancel").click(function () {
        // $("#image_preview").submit();
        $("#image_preview").show(1000);
        $("#upload_check").hide(0);
        $("#upload_cancel").hide(0);

        $("#imagePreview").css("background-image","url(../assets/img/<?php echo $userprofile['image'];?>)");
      });
      //# sourceURL=pen.js
    </script>
  </body>
  </html>