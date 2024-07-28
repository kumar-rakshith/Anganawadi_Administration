<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $admin=new Admin();

  $admin->notLogged('admin', '../index');
  
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
          <h3 class="page-title" style="color:skyblue;"> Child details</h3>
        </div>
       <!--Undu-->
        <div class="col-lg-10 offset-lg-1 grid-margin stretch-card">
          <div class="card">
            
            <div class="card-body">
              <!--Undu-->
              <h4 class="card-title">View Child Details</h4>
              <p class="card-description"><code>All Child Details</code>
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
                        <!--  <th class="wd-20p">Age</th> -->
                        <th class="wd-20p">DOJ</th>
                        
                        <th class="wd-20p">Gender</th>

                        
                        <!-- <th class="wd-20p">Delete</th> -->
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
                        <td><?php echo $row['f_adharno'] ?></td>
                        <td><?php echo $row['m_adharno'];?></td>
                        <td><?php echo $row['Address'];?></td>
                        <td><?php echo $row['dob'];?></td>
                        <!-- <td><?php echo $row['age'];?></td> -->
                        <td><?php echo $row['doj'] ?></td>
                        
                        <td><?php echo $row['gender'] ?></td>
                        
                        
                                                     <!-- <td><a href="updatecenter.php?crid=<?php echo $row['cid']; ?>" ><i class="mdi mdi-grease-pencil">Update</a></i><td>
                                          
                                                     <td><a href="DeleteCenter.php?crid=<?php echo $row['cid']; ?>" ><i class="mdi mdi-delete">delete</a></i><td> -->

                                                     </tr>
                                                     <?php  } ?>
                                                   </tbody>
                                                 </table>

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