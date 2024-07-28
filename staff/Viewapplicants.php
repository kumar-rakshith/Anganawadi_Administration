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
    <!-- End plugin css for this page -->
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
            <h3 class="page-title" style="color:skyblue;">  Scheme Applicants </h3>
          </div>
          <!--Undu-->
          <div class="col-lg-10 offset-lg-1 grid-margin stretch-card">
            <div class="card">
              
              <div class="card-body">
                <!--Undu-->
                <h4 class="card-title">View Applicants Details </h4>
                <p class="card-description"><code>All Applicants Details</code>
                </p>
                  <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddScheme()">Add Scheme</button>
                  <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                  <table id="" class="table table-striped table-bordered table-responsive w-100">
                    <thead>
                      <tr>
                        <th class="wd-15p">Number</th>
                        <!-- <th class="wd-15p">Aid</th> -->
                        <th class="wd-15p">Name</th>
                        <th class="wd-15p">father name</th>
                        <th class="wd-20p">ration number</th>
                        <th class="wd-20p">caste</th>
                        <th class="wd-15p">Adhar number</th>
                        <th class="wd-10p">voter id</th>
                        <th class="wd-10p">s_id</th>
                        
                        <th class="wd-10p">pnumber</th>
                        <!-- <th class="wd-25p">Update</th>
                        <th class="wd-25p">Delete</th>
                      -->                 </tr>
                    </thead>
                    <tbody>
                      <?php
                      include('connect.php');
                      $i=1;
                      $query=mysqli_query($con,"SELECT * FROM `tbl_application`") or die(mysqli_error($con));
                      while ($row=mysqli_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <!--td><?php echo $row['aid'];?></td--> 
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['rnumber'];?></td>
                        <td><?php echo $row['caste'];?></td>
                        <td><?php echo $row['anumber'];?></td>
                        <td><?php echo $row['vid'];?></td>
                        <td><?php echo $row['s_id'];?></td>
                        
                        <td><?php echo $row['pnumber'];?></td>
                        <!--td><img src="photos/<?php echo $row['image']; ?>" alt="No Image" height="100" width="100" class="img-rounded"></td-->
                        <!--td><?php echo date('d-m-Y',strtotime($row['add_date']));?></td-->
                                                        <!--td><?php echo date('d-m-Y',strtotime($row['Scheme_fromDate']));?></td>
                                                        <td><?php echo date('d-m-Y',strtotime($row['Scheme_ToDate']));?></td>

                                        
                                          <!-- <td><a href="UpdateScheme.php?cid=<?php echo $row['sc_id']; ?>" ><i class="mdi mdi-grease-pencil">Update</i></a></td>-->
                                          <td><a href="Deleteapplicants.php?cid=<?php echo $row['aid'] ?>" onclick="return confirm('Are you sure');"><i class="mdi mdi-delete">Delete</i></a></td> 

                                        </tr>
                                        <?php  }?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- content-wrapper ends -->
                            <!-- partial:../../partials/_footer.html -->
                            <?php include "footer.php";?>


                            <script type="text/javascript">
                              function AddScheme()
                              {
                                window.location='AddScheme.php';
                              }
                            </script>
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