<?php

    define('DIR', '');
    require_once DIR . 'config.php';

    $control = new Controller(); 

    $staff=new Admin();
    $staff->isLogged('staff', 'Staff/index');

    $shownext = 0;
    $pno = "";

    date_default_timezone_set('Asia/Kolkata');
    $current_time = date('Y-m-d H:i:s', time());
    // $check_time = date('Y-m-d H:i:s',strtotime('+30 minutes',strtotime($current_time)));

    
    $otp = 0;
    $id = 0; 

    if (isset($_POST['forgot_btn'])) {

        $shownext = 1;
        // $type = $_POST['type'];
        $email = $_POST['email'];

        $res = $control->check_valid_staff($email);
        if ($res) {
            $id = $res['staff_id'];
            $_SESSION['users_id']=$id;

            //PHONE NUMBER
            $pno = $res['contact'];

            //OTP
            $otp = $res['otp'];
            $previous_otp = $res['otp'];
            $update_timestamp = $res['update_timestamp'];
            $check_time = date('Y-m-d H:i:s',strtotime('+30 minutes',strtotime($update_timestamp)));

            if(($previous_otp==0) || ($current_time>=$check_time)){

                $otp = "";
                $generator = "135792468"; 
                for ($i = 1; $i <= 4; $i++) { 
                    $otp .= substr($generator, (rand()%(strlen($generator))), 1); 
                }
                $res = $control->update_otp_staff($id,$otp,$current_time);
                // echo "YESSSSS";
                require('sms/textlocal.class.php');
                $textlocal = new Textlocal(false, false, '+1T86CwG4qA-BzXrIPvmwCfWD5UugqdAx49NM0xo0S');
                $numbers = array($pno);
                $sender = 'TXTLCL';
                $message = 'Anganawadi Administration: '."\r\n".'The OTP to reset your account password is - '.$otp."\r\n".'Otp is valid for only 30 minutes. Never share your OTP.';

                try {

                    $result = $textlocal->sendSms($numbers, $message, $sender);
                    // print_r($result);
                } catch (Exception $e) {
                    // echo $message;
                    // die('Error: ' . $e->getMessage());
                }
        }else if($check_time>$current_time){
            // echo "Working";
        }
        }else{
            $shownext = 0;
            $_SESSION['error_message'] = "Invalid User Details! Please try again.";
        }

        // }
       
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="staff/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="staff/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="staff/assets/css/style.css">
    <link rel="shortcut icon" href="staff/assets/images/favicon.png" />

     <!-- Background Change -->
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
    <script type="text/javascript" src="assets/js/modernizr.custom.86080.js"></script>
    <!-- End Background Change -->

    <style type="text/css">

        .page-error, .page-login {
            background: none;
            display: table;
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
        }
        
        .text {
          color: #000000;
          font-size: 16px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: left;
        }

        input{
            width: auto;
        }

        .content-wrapper {
          background: none;
        }

        .cb-slideshow li{ 
            color: transparent;
        }

        .btn.btn-lg, .btn-group-lg > .btn {
            font-size: 1.05rem;
        }
        .auth form .auth-form-btn {
            line-height: 0;
        }

        .vertical-text {
          width:1px;
          word-wrap: break-word;
          white-space:pre-wrap; 
          float: left;

          text-shadow: 0px 3px 3px rgba(255,255,255,0.3);
        }

        h2 { color: rgba(255, 255, 255, 0.4); font-family: 'Raleway',sans-serif; font-size: 32px; font-weight: 400; line-height: 50px; margin: 0 0 24px; text-align: center; text-transform: uppercase; }
    </style>

    <!-- Sweet Alerts -->
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <script src="assets/js/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="assets/css/custom_style_outiline.css">
    
  </head>
  <body id="page" init-ripples="">
    <ul class="cb-slideshow">
        <li><span >Image 01</span>
        <li><span>Image 02</span>
        <li><span>Image 03</span>
        <li><span>Image 04</span>
        <li><span>Image 05</span>
        <li><span>Image 06</span>
    </ul>

    <div class="container-scroller page-login text">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 offset-lg-4">
              <div id="firstBox" class="auth-form-light text-left p-5 shadow mb-5 bg-white">
                <div class="brand-logo">
                  <div class="row">

                    <div class="col-md-12 d-flex align-items-center">
                      <div class="d-flex flex-row align-items-center">
                        <a  href="index.php">
                          <i class="mdi mdi-backburger icon-md text-primary"></i>
                        </a>
                        <h3 class="mb-0 ml-2 text-primary"> Anganawadi Administration </h3>
                      </div>
                    </div>
            
                  </div>
                </div>
                <span id="infoText">
                  <?php if($shownext==0){ ?>
                    <h4>Welcome</h4>
                    <h6 class="font-weight-light">Please Enter Your Login Credentials.</h6>
                  <?php } ?>

                </span>
                <?php $control->sessionMessage(); ?>

                <form class="m-t-md active" method="post" action="Controller/staffcontroller.php" id="login_form" <?php if($shownext==1){echo 'hidden=""';} ?> >
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <a id="forgot">Forgot Password?
                        </a>
                    </div>
                    <button type="submit" name="add" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Login</button>

                </form>
                <form class="m-t-md" method="post" action="#" id="login_form2"  <?php if($shownext==0){echo 'style="display:none;"';} ?> >
                    <?php if($shownext==1){ ?>
                        <a id="cancel" class="alert alert-danger" style="padding:8px; color:#84404e;">X Cancel
                        </a>
                      </br>
                      </br>
                    <?php }else{ ?>
                      <br>
                      <a id="back" class="alert alert-danger" style="padding:8px; color:#84404e;">&#8592;  Back
                      </a>
                      <br>
                      <br>
                    <?php } ?>
                    

                    <p></p>
                    <?php if($shownext==1){ ?>

                    <?php }else{ ?>

                    <?php } ?>

                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Registered Email" required <?php if($shownext==1){echo 'disabled="" value="'.$email.'"';} ?>>
                    </div>
                    
                    <div class="form-group">
                    </div>
                    <?php if($shownext==1){ ?>
                        

                    <?php }else{ ?>
                        <button type="submit" name="forgot_btn" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >Generate OTP</button>
                    <?php } ?>

                </form>

                <form class="m-t-md" method="post" action="" id="login_form3" <?php if($shownext==0){echo 'hidden=""';}else ?>>
                    <br>
                    <div class="form-group">
                        <label for="inputName" class="control-label">OTP sent to +91 
                        <?php 

                            $first=substr($pno, 0,4);
                            $last=substr($pno, -2);
                            echo $first."XXXX".$last; 

                        ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="password" name="otp" id="check_otp" class="form-control" placeholder="Enter 4 Digit OTP" required>
                        <label id="invalid_label" class="control-label" style="color:#a94442"></label>
                    </div>
                    <button type="submit" name="check_otp_btn" id="otp_btn" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Change Password</button>
                </form>
              </div>

              <div id="login-box" class="auth-form-light text-left p-5 shadow mb-5 bg-white">
                <div class="brand-logo">
                  <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                      <div class="d-flex flex-row align-items-center">
                        <a  href="index.php">
                          <i class="mdi mdi-backburger icon-md text-primary"></i>
                        </a>
                        <h3 class="mb-0 ml-2 text-primary"> Anganawadi Administration </h3>
                      </div>
                    </div>
            
                  </div>
                </div>
                <!-- <h4>Welcome</h4> -->
                <h6 class="font-weight-light">Please Enter A New Password.</h6>
                <?php $control->sessionMessage(); ?>
                <div class="login-box" id="change_password">
                  <p class="text-center m-t-md"></p>
                  <form class="m-t-md" method="post" action="Controller/password_controller.php" id="login_form4">
                      <div class="form-group">
                          <input type="hidden" name="id" id="identifier" class="form-control">
                      </div>
                    
                      <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>" disabled>
                      </div>
                      <div class="form-group" id="passblock">
                          <label for="exampleInputEmail1">New Password</label>
                          <input type="password" name="password" min="8" class="form-control" id="password" pattern="^^[a-zA-Z0-9]{8,16}$" required="" placeholder="Set New Password" title="Must Be Atleast 8 Characters And Less Than 17 Characters. Wihte Spaces Not Allowed">
                      </div>

                      <div class="form-group" id="con_passblock" style="display:none">
                          <label for="exampleInputEmail1">Retype New Password</label>
                          <input type="password" name="con_password" class="form-control" id="con_password" pattern="^[a-zA-Z0-9]{8,16}$" required="" placeholder="Confirm Password" title="Must Be Atleast 8 Characters And Less Than 17 Characters">
                      </div>
                   
                        <button type="submit" id="cng_pswd_staff" name="cng_pswd_staff" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >Change Password</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="col-lg-1" style="margin-top: auto; margin-bottom: auto;">
              <h2 class="vertical-text">STAFF</h2>
            </div> 

          </div>
        </div>
      </div>
    </div><!-- Main Wrapper -->

    <!--
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    -->



    <script src="assets/js/jquery.min.js"></script>

    <script src="staff/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- inject:js -->
    <script src="staff/assets/js/off-canvas.js"></script>
    <script src="staff/assets/js/hoverable-collapse.js"></script>
    <script src="staff/assets/js/misc.js"></script>


    <script type="text/javascript">

        $(document).ready(function(){

        $('#login_form3').submit(false);
        // $('#login_form2').hide();
        $('#login-box').css('display','none');


          $("#forgot").click(function(){
           
            $("#login_form").hide(0);
            // $("#login_form2").show();
            $("#login_form2").fadeIn(1200); 

            $("#login_form2").attr("style", "display:block")

            $("#infoText").html('<h6 class="font-weight-light">Please Enter Your Registered Email ID</h6>');

          });

           $("#back").click(function(){
           
            $("#login_form").show(1000);
            $("#login_form2").hide(1000);
            $("#infoText").html('<h4>Welcome</h4><h6 class="font-weight-light">Please Enter Your Login Credentials.</h6>');
          });

        });

        function showhide() {
            $("#login_form").hide(1000);
            $("#login_form2").show(1000);
        }

        $("#cancel").click(function(){
            window.location.href = "residentLogin.php";
        });

        $("#otp_btn").click(function() {

            var otp = <?php echo $otp ?>;
            var otp2 = otp;
            var check_otp = $('#check_otp').val();

            if(otp!=check_otp){
                $('#check_otp').val('');
                $('#invalid_label').html('Invalid OTP');
            }else{
                $('#login-box').css('display','block');
                $('#firstBox').css('display','none');
            }
        });

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
    </script>
</body>
</html>
