<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $staff=new Staff();
  $admin=new Admin();

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
            <h3 class="page-title" style="color:skyblue;">Add Attendance </h3>
            
          </div>
          <form action="Controller/addattendance.php" method="POST">
            <table class="table table-stripped">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Name</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                $i=1;
                $stmt=$admin->ret("SELECT * FROM `tbl_child`");
                while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                  # code...
                  
                  ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <input type="hidden" value="<?php echo $row['child_id']; ?>" name="child_id<?php echo $i;?>">
                    <td><?php echo $row['c_name'];?></td>
                    <td><input type="radio" name="status<?php echo $i;?>" checked value="present"> Present 
                      <input type="radio" name="status<?php echo $i;?>" value="absent"> Absent</td>
                    </tr>
                    <?php $i++;} ?>
                  </tbody>
                </table>
                <input type="hidden" name="no" value="<?php echo $i;?>">
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary" name="add"> Add Attendance</button>
                </div>
              </form>
              <?php include('connect.php');
                if (isset($_POST['add'])) {
                  // Loop through child IDs to insert attendance for each child
                  for ($i = 1; $i <= $numChildren; $i++) {
                      $childId = $_POST['child_id' . $i];
                      $status = $_POST['status' . $i];
                      $currentDate = date('Y-m-d');
                      
                      $qry = mysqli_query($con, "INSERT INTO `tbl_attendance` (`child_id`, `date`, `status`) VALUES ('$childId', '$currentDate', '$status')") or die(mysqli_error($con));
                  }
              }
              
                ?>
              
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