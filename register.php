<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.theme-guys.com/materialism/html/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2019 17:44:04 GMT -->
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Materialism</title>
	<meta name="msapplication-TileColor" content="#9f00a7">
	<meta name="msapplication-TileImage" content="staff/assets/img/favicon/mstile-144x144.html">
	<meta name="msapplication-config" content="http://www.theme-guys.com/materialism/assets/img/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" href="staff/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="staff/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="staff/assets/css/style.css">
    <link rel="shortcut icon" href="staff/assets/images/favicon.png" />
	
    <!-- Custom CSS -->

    <!-- Background Change -->
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
    <script type="text/javascript" src="staff/assets/js/modernizr.custom.86080.js"></script>
    <!-- End Background Change -->
    <link rel="stylesheet" href="assets/css/custom_style_outline.css">

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

        .container{
        	text-align: left;
        }

        .cb-slideshow:after { 
		    content: '';
		    background: transparent url(../img/pattern.png) repeat top left; 
		}

    </style>
</head>
<body id="page" class="text">

	<ul class="cb-slideshow" >
        <li><span>Image 01</span>
        <li><span>Image 02</span>
        <li><span>Image 03</span>
        <li><span>Image 04</span>
        <li><span>Image 05</span>
        <li><span>Image 06</span>
    </ul>

    <div class="container-scroller">
	   <div class="container-fluid page-body-wrapper full-page-wrapper">
	      <div class="content-wrapper d-flex align-items-center auth">
	        <div class="row flex-grow">
				<div class="col-8 mx-auto">
	                <div class="card">
	                  <div class="card-body">
	                    <div class="row col-md-12">
		                  	<a class="col-md-0" href="index.php">
	                          <i class="mdi mdi-backburger icon-md text-primary"></i>
	                        </a>
		                    <h3 class="text-primary col-md-11">Anganawadi Administration</h3>
		                </div>

	                    <form class="form-sample" action="Controller/registercontroller.php" method="POST" enctype="multipart/form-data">
	                      <h4 class="card-description"> Sign Up </h>
	                      
	                      <br>
	                      <br>

	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">First Name</label>
	                            <div class="col-sm-9">
									<input type="text" name="r_name" class="form-control" pattern="[A-Za-z]+" title="letters only" required placeholder="">
	                              <!-- <input type="text" class="form-control" /> -->
	                            </div>
	                          </div>
	                        </div>
	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Last Name</label>
	                            <div class="col-sm-9">
									<input type="text" name="last_name" class="form-control" pattern="[A-Za-z]+" title="letters only" required placeholder="">
	                              <!-- <input type="text" class="form-control" /> -->
	                            </div>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Address</label>
	                            <div class="col-sm-9">
	                              <textarea class="form-control" maxlength="50" name="address" required rows="4"></textarea>
	                            </div>
	                          </div>
	                        </div>


	                      <!--   <div class="col-lg-6">
	                        	<input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
	                      	</div> -->


	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Phone</label>
	                            <div class="col-sm-9">
									<input type="number" id="phone" name="phone" class="form-control" pattern="^\d{10}$" title="10 numeric characters only" required placeholder="">
							  		<small class="form-text text-muted" id="phoneblock"></small>
	                            	
	                            </div>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Date Of Birth</label>
	                            <div class="col-sm-9">
									<input type="date" name="dob" class="form-control" required placeholder=" ">
	                            </div>
	                          </div>
	                        </div>
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
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Image</label>
	                            <div class="col-sm-9">	
	                            	<!-- <input type="file" name="image" class="form-control" required placeholder=""> -->
									<input type="file" name="image" class="file-upload-default">
			                        <div class="input-group col-xs-12">
			                          <input type="text" class="form-control file-upload-info" required disabled="">
			                          <span class="input-group-append">
			                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
			                          </span>
			                        </div>
	                            </div>
	                          </div>
	                        </div>
	                        
	                      </div>
	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Email</label>
	                            <div class="col-sm-9">
	                            	<input type="email" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required placeholder="">
							  		<small class="form-text text-muted" id="emailblock">We'll never share your email with anyone else.</small>
	                            </div>
	                          </div>
	                        </div>
	                        <div class="col-md-6">
	                          <div class="form-group row">
	                            <label class="col-sm-3 col-form-label">Password</label>
	                            <div class="col-sm-9">
                    				<input type="password" name="password" id="password" pattern="[0-9]+" title="only number" required class="form-control"> 
	                            </div>
	                          </div>
	                        </div>
	                      </div>

	                      <div class="row">
	                        <div class="col-md-12">
	                            <input class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="add" id="sbtn" value="Register">
	                        </div>
	                      </div>
	                      <div class="row">
	                        <div class="col-md-12 text-center">
						  		<small class="text-muted">Already have an account? <a href="residentLogin.php" class="text-primary">Login</a></small>                                          
	                        </div>
	                      </div>

	                    </form>
	                  </div>
	                </div>
	            </div>
	        </div>
        </div>
       </div>
   	</div>
	<!--container end.//-->

	<script src="staff/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="staff/assets/js/off-canvas.js"></script>
    <script src="staff/assets/js/hoverable-collapse.js"></script>
    <script src="staff/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="staff/assets/js/file-upload.js"></script>

   
   	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/form-validation.js"></script>

	<script>
		$(document).ready(function(){
		  $("#email").change(function(){
		    var email = $("#email").val();
            // alert(email);
            $.ajax({ 
                type: "POST", 
                url: "Controller/validation_test.php",
                data: {
                    regemail:email
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

			$("#phone").change(function(){
		    var phone = $("#phone").val();
            // alert(email);
            $.ajax({ 
                type: "POST", 
                url: "Controller/validation_test.php",
                data: {
                    phone:phone
                },
                dataType: 'text',
                success: function(html){
                    if(html=='Phone Exists'){
                        $('#phoneblock').html('<label style="color: #fe7c96;float: left;"><b>&nbsp</b>Phone number already exists</label>');
                        $('#phone').css('border-color','#fe7c96');
                        $('#sbtn').attr('style','pointer-events: none');
                        $('#sbtn').attr('disabled','true');
                        // alert("Email already exists");
                    }
                    else{
                        $('#phoneblock').html("");
                        $('#phone').css('border-color','#c7c7c7');
                        $('#sbtn').attr('style','pointer-events: all');
                        $('#sbtn').removeAttr('disabled');
                        // alert("Email does not exists");
                    }
                }

            });
		  });
		});
	</script>

    <script>
    	// $("#email").onblur(function() {
     //        var email = $("#email").val();
     //        alert(email);
     //        console.log(email);

            // $.ajax({ 
            //     type: "POST", 
            //     url: "<?php echo MAIN_SITE ?>qacademy/controller/validation_test.php?st="+stutype, 
            //     data: {
            //         regemail:email
            //     },
            //     dataType: 'text',
            //     success: function(html){
            //         if(html=='<span style="color:#960018"><b>Contact already exists</b></span>'){
            //             $('#emailblock').html('<label style="color: #a94442;font-weight: 700;margin-top: -3px;float: left;font-size: 12px;"><b>&nbsp</b>Email Id already exists</label>');
            //             $('#sbtn').attr('style','pointer-events: none');
            //             // $('#fortab3').attr('style','pointer-events: none');
            //             // $('.next').attr('style','pointer-events: none');
            //         }
            //         else{
            //             $('#emailblock').html("<span><span>");
            //             $('#sbtn').attr('style','pointer-events: all');
            //             // $('#fortab3').attr('style','pointer-events: all');
            //             // $('.next').attr('style','pointer-events: all');
            //         }
            //     }

            // });

        // });
    </script>
</body>

<!-- Mirrored from www.theme-guys.com/materialism/html/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2019 17:44:08 GMT -->
</html>