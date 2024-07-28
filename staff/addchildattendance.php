<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $staff=new Staff();

  $staff->notLogged('staff', '../index');

?>

<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from spruko.com/demo/spain/Leftmenu-Fullwidth-Lightsidebar/datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jan 2019 12:21:17 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="msapplication-TileColor" content="#0670f0">
  <meta name="theme-color" content="#32cafe">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" href="https://spruko.com/demo/spain/favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="https://spruko.com/demo/spain/favicon.ico" />

  <!-- Title -->
  <!-- <title>BALA SAMRAKSHANA STAFF</title> -->
  <link rel="stylesheet" href="../assets/fonts/fonts/font-awesome.min.css">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

  <!-- Dashboard Css -->
  <link href="assets/css/left-sidemenu.css" rel="stylesheet" />

  <!-- c3.js Charts Plugin -->
  <link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

  <!-- Data table css -->
  <link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

  <!-- Slect2 css -->
  <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />

  <!-- Custom scroll bar css-->
  <link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

  <!-- Sidemenu Css -->
  <link href="assets/plugins/toggle-sidebar/full-sidemenu.css" rel="stylesheet" />

  <!---Font icons-->
  <link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
</head>
<body class="app sidebar-mini rtl">
  
  <div class="page">
    <div class="page-main">
      <?php include 'navbar.php'; ?>

      <div class="app-content  my-3 my-md-5">
        <div class="side-app">
          <div class="page-header">
            <h4 class="page-title">View Meeting</h4>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Schemes</a></li>
              <li class="breadcrumb-item active" aria-current="page">View Schemes</li>
            </ol>

          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Add Attendance</div>
                </div>
                <div class="card-body">
                  <!-- <div class="table-responsive"> -->
                  <table  class="table table-striped table-bordered w-100">
                    <thead>
                      <tr>
                        <th class="wd-15p">Sl.No</th>
                        <th class="wd-15p">Child Name</th>
                        <th class="wd-15p">Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include('connect.php');
                      $i=1;
                      $query=mysqli_query($con,"SELECT * FROM `tbl_child`  ") or die(mysqli_error($con));
                      while ($row=mysqli_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['c_name'].' '.$row['f_name'];?></td>
                        <td><input type="radio" name="" value="Present">Present&nbsp;&nbsp;&nbsp;
                          <input type="radio" name="" value="Absent">Absent</td>
                          

                        </tr>
                        <?php  }?>
                      </tbody>
                    </table>
                    <form action="" method="POST">
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" name="add">Add Attendance</button>
                      </div>
                    </form>
                    
                    <!-- </div> -->
                  </div>
                  <!-- table-wrapper -->
                </div>
                <!-- section-wrapper -->

              </div>
            </div>
          </div>
          <!--footer-->
          <!-- <footer class="footer">
            <div class="container">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                  Copyright © 2018 - 2019 <a href="#"></a>. Designed by <a href="#">Deepika,Harshitha,Ichitha</a> All rights reserved.
                </div>
              </div>
            </div>
          </footer> -->
          <!-- End Footer-->
        </div>
      </div>
    </div>

    <!--Back to top-->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Dashboard js -->
    <script src="assets/js/vendors/jquery-3.2.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/selectize.min.js"></script>
    <script src="assets/js/vendors/circle-progress.min.js"></script>
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- Fullside-menu Js-->
    <script src="assets/plugins/toggle-sidebar/sidemenu.js"></script>

    <!-- Data tables -->
    <script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatable/datatable.js"></script>

    <!-- Select2 js -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>

    <!-- Custom scroll bar Js-->
    <script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Js-->
    <script src="assets/js/custom.js"></script>

  </body>

  <!-- Mirrored from spruko.com/demo/spain/Leftmenu-Fullwidth-Lightsidebar/datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jan 2019 12:21:19 GMT -->
  </html>