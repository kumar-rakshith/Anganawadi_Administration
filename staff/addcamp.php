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
            <h3 class="page-title" style="color:skyblue;">Add Campaign Details </h3>
            
          </div>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <!-- <h4 class="card-title">Basic form elements</h4> -->
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="card" action="" method="POST" enctype="multipart/form-data">
                  <div class="card-header">
                    <h3 class="card-title">ADD CAMP</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label"> Camp Name</label>
                          <input type="text" class="form-control" name="name" required autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Date</label>
                          <input type="date" class="form-control" name="date" id="date" required autocomplete="off" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Time</label>
                          
                          <input type="time" class="form-control" id="time" name="time" required autocomplete="off" >
                        </div>
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control"   name="address" autocomplete="off">
                        </div>
                      </div> -->
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Description</label>
                          <input type="text" class="form-control"  name="discription"required autocomplete="off" >
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="add">ADD</button>
                    <!-- <button type="reset" class="btn btn-info" >CANCEL</button> -->
                  </div>
                  
                </form>

                <?php include('connect.php');
                if(isset($_POST['add']))
                {
                  $name=$_POST['name'];
                  $date=$_POST['date'];
                  $time=$_POST['time'];
      // $address=$_POST['address'];
                  $discription=$_POST['discription'];
                  
                  
                  

                  $qry=mysqli_query($con,"INSERT INTO `tbl_camp`(`name`, `date`, `time`, `discription`) VALUES  ('$name','$date','$time','s$discription')")or die(mysqli_error($con));
                  if($qry){
                    $_SESSION['success_message'] = "The record has been added successfully.";
                    echo '<script>window.location="viewcamp.php"; </script>';
                  }
                  else{
                    // echo '<script>alert("failed add a food");  </script>';
                  }
                }
                ?>
                
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


  <script>
  // Get the date and time input fields
  var dateInput = document.getElementById('date');
  var timeInput = document.getElementById('time');

  // Get the current date and time
  var currentDate = new Date();
  var currentYear = currentDate.getFullYear();
  var currentMonth = currentDate.getMonth() + 1; // Months are zero-based
  var currentDay = currentDate.getDate();
  var currentHour = currentDate.getHours();

  // Set the minimum date and time values
  var minDate = currentYear + '-' + currentMonth.toString().padStart(2, '0') + '-' + currentDay.toString().padStart(2, '0');
  var minTime = '09:00';

  // Set the maximum date and time values
  var maxTime = '18:00';

  // Set the minimum date and time attributes on the input fields
  dateInput.setAttribute('min', minDate);
  timeInput.setAttribute('min', minTime);

  // Add event listeners to the date and time input fields
  dateInput.addEventListener('input', validateDateTime);
  timeInput.addEventListener('input', validateDateTime);

  // Function to validate the date and time
  function validateDateTime() {
    var selectedDate = new Date(dateInput.value);
    var selectedHour = parseInt(timeInput.value.split(':')[0]);

    // Compare the selected date with the current date
    if (selectedDate < currentDate) {
      dateInput.setCustomValidity('Selected date must not be in the past');
    } else {
      dateInput.setCustomValidity('');
    }

    // Check if the selected hour is within the allowed range
    if (selectedHour < 9 || selectedHour > 18) {
      timeInput.setCustomValidity('Selected time must be between 9 AM and 6 PM');
    } else {
      timeInput.setCustomValidity('');
    }
  }
</script>

</body>
</html>