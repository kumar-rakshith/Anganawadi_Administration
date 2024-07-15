<!DOCTYPE html>
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
    </style>

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
            <div class="col-lg-4 mx-auto">
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
                <h4>Welcome</h4>
                <h6 class="font-weight-light">Please Enter Your Login Credentials.</h6>
                <form class="pt-3" action="Controller/residentcontroller.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <input type="email" name="email" id="useremail" placeholder="User Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" pattern="[0-9]+" title="only number" required class="form-control"> 
                  </div>
                  <div class="mt-3">
                    
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="add">LOGIN</button>

                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        
                    </div>
                    <a id="fpBtn" class="auth-link text-black">Forgot password?</a>
                  </div>
                 
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Register</a>
                  </div>
                </form>
              </div>

              <!--  Email Box -->
              <div id="emailBox" class="auth-form-light text-left p-5 shadow mb-5 bg-white">
                <div class="brand-logo">
                  <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                      <div class="d-flex flex-row align-items-center">
                        <a  id="fpBackBtn">
                          <i class="mdi mdi-backburger icon-md text-primary"></i>
                        </a>
                        <h3 class="mb-0 ml-2 text-primary"> Anganawadi Administration </h3>
                      </div>
                    </div>
            
                  </div>
                </div>
                <h6 class="font-weight-light">Please Enter Your Registered Email.</h6>
                <form class="pt-3" action="Controller/residentcontroller.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <input type="email" name="email" id="useremail" placeholder="Registered Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"class="form-control">
                  </div>
                  <!-- <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" pattern="[0-9]+" title="only number" required class="form-control"> 
                  </div> -->
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="add">Generate OTP</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        
                    </div>
                    <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                  </div>
                 
                  <!-- <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Register</a> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- JQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <script src="staff/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- inject:js -->
    <script src="staff/assets/js/off-canvas.js"></script>
    <script src="staff/assets/js/hoverable-collapse.js"></script>
    <script src="staff/assets/js/misc.js"></script>
    <!-- endinject -->


    <script>
      (function(i, s, o, g, r, a, m)
      {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-62479268-1', 'auto');
      ga('send', 'pageview');
    </script>

    <script>
      function clearText() {
        document.getElementById("useremail").value = "";
        document.getElementById("password").value = "";
        // document.getElementById("residentForm").reset();
      }

      $(document).ready(function(){
        $("#emailBox").hide();


        $("#fpBtn").on("click",function(){
          $("#firstBox").hide();
          $("#emailBox").show(500);
        });

        $("#fpBackBtn").on("click",function(){
          $("#firstBox").show(500);
          $("#emailBox").hide();
        });

      });  
    </script>

  </body>
</html>