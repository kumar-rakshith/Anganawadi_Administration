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

     <!-- Sweet Alerts -->
  <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
  <script src="../assets/js/sweetalert2.all.min.js"></script>

<!-- Custom CSS -->
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
            <h3 class="page-title" style="color:#b66dff;">Grocery Details</h3>
          </div>
          <!--Undu-->
          <div class="col-lg-10 offset-lg-1 grid-margin stretch-card">
            <div class="card">
              
              <div class="card-body">
                <!--Undu-->
                <h4 class="card-title">View Grocery Details</h4>
                <p class="card-description"><code>All Grocery Details</code>
                </p>
                    <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddCenter()">Add Center</button>
                    <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                    <?php $control->sessionMessage(); ?>
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th class="wd-15p">Sl.No</th>
                          <th class="wd-15p">Grocery Type</th>
                          <!--  <th class="wd-20p">Date</th> -->
                          <th class="wd-15p">Quantity</th>
                          <th class="wd-20p">Delete</th>
                          <!--<th class="wd-20p">Delete</th>-->
                          
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        include('connect.php');
                        $i=1;
                        $query=mysqli_query($con,"SELECT * FROM `tbl_grocery`") or die(mysqli_error($con));
                        while ($row=mysqli_fetch_array($query)) {?>
                        <tr>
                          <td>
                            <?php echo $i++;?>
                          </td>
                          <td><?php echo $row['gtype'];?></td>
                          <td><?php echo $row['quantity'];?></td>
                          <!--     <td><?php echo $row['date'];?></td> -->
                          
                          
                          
                          
                          <td><a href="updategrocery.php?gid=<?php echo $row['gid']; ?>" ><i class="btn btn-primary">Update</a></i></td>
                          
                          
                          <td><a id="<?php echo $row['gid']; ?>" onclick="validation(this.id);"><i class="btn btn-danger">Delete</a></td>

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

      <script type="text/javascript">
                                                            
    function validation(rowid)
    {
        Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              customClass: 'swal-wide',
              confirmButtonColor: '#b66dff',
              cancelButtonColor: '#fe5678',
              confirmButtonText: 'Yes, Delete It!'
            }).then((result) => {
        if (result.value) { 

            window.location.href = "Deletegrocery.php?gid="+rowid;

            }
        })

    }
  </script>
    </body>
    </html>