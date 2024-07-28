   <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <span class="menu-title">Home</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>

      <!-- Multiple List -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
          <span class="menu-title">Scheme Details</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-image-filter menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="AddScheme.php">Add Scheme Details</a></li>
            <li class="nav-item"> <a class="nav-link" href="ViewScheme.php">View Scheme Details</a></li>
          </ul>
        </div>
      </li>

      <!-- Multiple List -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
          <span class="menu-title">Staff Details</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-image-multiple menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="AddStaff.php">Add Staff Details</a></li>
            <li class="nav-item"> <a class="nav-link" href="ViewStaff.php">View Staff Details</a></li>
          </ul>
        </div>
      </li>

      <!-- Multiple List -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
          <span class="menu-title">View Details</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-xing-circle menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic3">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="viewresident.php">Resident details</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewchild.php">Child details</a></li>
            <li class="nav-item"> <a class="nav-link" href="ViewAttendance.php">Attendance Details</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewpregnant.php">Pregnant women details</a></li>
            <li class="nav-item"> <a class="nav-link" href="ViewFeedback.php">Feedbacks</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewgrocery.php">Grocery details</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewvaccination.php">Vaccination details</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewcamp.php">Compgain details</a></li>
          </ul>
        </div>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="notification.php">
          <span class="menu-title">Send Notification</span>
          <i class="mdi mdi-table-large menu-icon"></i>
        </a>
      </li> -->

      
      <!-- Multiple List -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic7">
          <span class="menu-title">Reports</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-view-dashboard menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic7">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="viewchildreport.php">Child Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewpregnantreport.php">Pregnant Women Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewcampreport.php">Campaign Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="Viewapplicantsreport.php">Scheme Applicant Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="ViewVaccinationreport.php">Vaccination Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="viewgroceryreport.php">Grocery Report</a></li>
          </ul>
        </div>
      </li>

      <!--<li class="nav-item sidebar-actions">
        <span class="nav-link">
          <div class="border-bottom">
            <h6 class="font-weight-normal mb-3">Actions</h6>
          </div>-->
          <a id="logout" style="color: white;" class="btn btn-block btn-lg btn-gradient-primary mt-4">
            Logout
          </a>
          
          <!-- Sweet Alerts -->
          <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
          <script src="../assets/js/sweetalert2.all.min.js"></script>
          <script src="../assets/js/jquery.min.js"></script>
          <script type="text/javascript">
            $( '#logout, #logoutTop' ).click(function() {
                  Swal.fire({
                        title: 'Log out?',
                        text: "You will return to home screen!",
                        type: 'warning',
                        showCancelButton: true,
                        customClass: 'swal-wide',
                        confirmButtonColor: '#b66dff',
                        cancelButtonColor: '#fe5678',
                        confirmButtonText: 'Log out'
                  }).then((result) => {
                  if (result.value) { 

                      window.location.href = "logout.php";

                    }
                  })
            });
          </script>
          
        </ul>
      </nav>
      