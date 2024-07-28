 <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Home</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="ViewScheme.php">
        <span class="menu-title">View Scheme Details</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>




    <li class="nav-item">
      <a class="nav-link" href="Viewcamp.php">
        <span class="menu-title">View campaign details</span>
        <i class="mdi mdi-account-multiple menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewgrocery.php">
        <span class="menu-title">View Grocery Details </span>
        <i class="mdi mdi-silverware menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewvaccination.php">
        <span class="menu-title">View Vaccination Details</span>
        <i class="mdi mdi-sword menu-icon"></i>
      </a>
    </li>
   <!-- <li class="nav-item">
      <a class="nav-link" href="viewnotification.php">
        <span class="menu-title">View notification </span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>-->
    <li class="nav-item">
      <a class="nav-link" href="feedback.php">
        <span class="menu-title">Give feedback</span>
        <i class="mdi mdi-qrcode menu-icon"></i>
      </a>
    </li>

    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3">Actions</h6>
        </div>
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
    