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
            <h3 class="page-title" style="color:skyblue;">View Attendance </h3>
            
          </div>
          <table border='1' id="example" class="table table-striped">
            <tr>

              <th>Date</th>
              <th>Roll No</th>
              <th>Name</th>
              <th>Attendance</th>
              <?php
              $stmt = $admin->ret("SELECT * FROM `tbl_attendance` inner join `tbl_child` on `tbl_child` .child_id=`tbl_attendance`.child_id");
              While($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>

                <tr>
                 <td class="table-success"><?php echo $row['date']; ?></td>
                 <td class="table-success"><?php echo $row['child_id']; ?></td>
                 <td class="table-success"><?php echo $row['c_name']; ?></td>
                 <td class="table-success"><?php echo $row['status']; ?></td>

                 <!-- <td><a href="Controller/deleteatt.php?aid=<?php echo $row['aid']; ?>" Onclick="return confirm('are you sure')">delete</a></td> -->
                 
               </tr>
               <?php }?>
               
             </table>
             
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
       </html>