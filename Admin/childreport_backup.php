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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

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
          <h3 class="page-title" style="color:skyblue;"> Child Report</h3>
        </div>
        <!--Undu-->
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">

            <div class="card-body">
              <!--Undu-->
              <h4 class="card-title">Child Report</h4>
              <p class="card-description"><code>All Child Report</code>
              </p>
                  <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddCenter()">Add Center</button>
                  <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                  
                  <table id="" class="table table-striped table-bordered table-responsive w-100">
                    <thead>
                      <tr>
                        <th class="wd-15p">Sl.No</th>
                        <th class="wd-15p">Child Name</th>
                        <th class="wd-20p">Image</th>
                        <th class="wd-15p">Father Name</th>
                        <th class="wd-15p">Mother Name</th>
                        <th class="wd-20p">Phone</th>
                        <th class="wd-20p">Father AdharNo</th>
                        <th class="wd-20p">Mother AdharNO</th>
                        <th class="wd-15p">Address</th>
                        <th class="wd-20p">DOB</th>
                        <!--        <th class="wd-20p">Age</th> -->
                        <th class="wd-20p">DOJ</th>
                        <th class="wd-20p">Gender</th>
                        <!-- <th class="wd-20p">Update</th>
                        <th class="wd-20p">Delete</th> -->
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                      include('connect.php');
                      $i=1;
                      $query=mysqli_query($con,"SELECT * FROM `tbl_child`") or die(mysqli_error($con));
                      while ($row=mysqli_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['c_name'];?></td>
                        <td><img src="photos/<?php echo $row['image']; ?>" alt="No Image" height="100" width="100" class="img-rounded"></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['mname'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['f_adharno'];?></td>
                        <td><?php echo $row['m_adharno'];?></td>
                        <td><?php echo $row['Address'];?></td>
                        <td><?php echo $row['dob'];?></td>
                        <!--    <td><?php echo $row['age'];?></td> -->
                        <td><?php echo $row['doj'];?></td>
                        
                        <td><?php echo $row['gender'];?></td>

                        
                        
                                            
                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>

                    <br>
                    <form class="" action="Controller/generate_report.php" method="POST">
                      <div class="row">
                     
                          <div class="col-md-2 ml-auto">
                            <input type="text" name="filename" class="form-control" value="tbl_child" hidden>
                            <!-- <input type="text" name="format" class="form-control" value=".xls">  -->
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <button class="btn btn-sm btn-inverse-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Format</button>
                                <div class="dropdown-menu">
                                  <button type="button" id="optn_xls" class="dropdown-item">Excel</button>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <button type="button" id="optn_csv" class="dropdown-item">CSV</button>
                                </div>
                              </div>
                              <input type="text" disabled id="format_display" class="form-control" aria-label="Text input with dropdown button" value="Excel">
                              <input type="text" hidden name="format" id="format" class="form-control" value=".xls"> 

                            </div>
                          </div>

                          <div class="col-md-3">
                            <button type="submit" name="generate" class="btn btn-inverse-primary btn-fw btn-block">Download Report</button>
                          </div>
                      </div>
                    </form>
                </div>
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
  <script src="../assets/js/custom_js.js"></script>
  <!-- endinject -->

  <!--Dropdown Change-->
  <script>
  //   $(document).ready(function(){
  //     $("#optn_xls").click(function(){
  //       $("#format").val(".xls");
  //       $("#format_display").val("Excel");
  //       // alert($("#format_display").val());
  //     });
  //     $("#optn_csv").click(function(){
  //       $("#format").val(".csv");
  //       $("#format_display").val("CSV");
  //     });
  //   });
  </script>
</body>
</html>s