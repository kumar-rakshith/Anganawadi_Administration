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

  <link rel="stylesheet" href="../assets/css/custom_style.css">

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.jqueryui.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.jqueryui.min.css" />

  <style type="text/css">
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

    .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
      color: #ffffff;
      background-color: #b66dff;
      border-color: #f0e2ff;

    }

    div.dt-button-collection .dt-button {
        border-radius: 3px;
    }

    input[type="search"] {
      height: 22px;
     /* width: 150px;
      display: block;
      margin-bottom: 10px;
      background-color: yellow;*/
    }
  </style>
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
          <h3 class="page-title" style="color:skyblue;">Pregnant Women Report </h3>
        </div>
        <!--Undu-->
        <div class="col-lg-10 offset-lg-1 grid-margin stretch-card">
          <div class="card">
            
            <div class="card-body">
              <!--Undu-->
              <h4 class="card-title">View Pregnant Women Report</h4>
              <p class="card-description"><code>All Pregnant Women Report</code>
              </p>
                  <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddCenter()">Add Center</button>
                  <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                  
                  <table id="example" class="table table-striped table-bordered table-responsive w-100">
                    <thead>
                      <tr>
                        <th class="wd-25p" style="width:6%">Sl.No</th>
                        <th class="wd-15p" style="width:15%">Name</th>
                        <th class="wd-15p" style="width:15%">Phone</th>
                        <th class="wd-20p" style="width:20%">Address</th>
                        <th class="wd-20p" style="width:10%">Children</th>
                        <th class="wd-20p" style="width:10%">Weight</th>
                        <th class="wd-20p" style="width:10%">Height</th>
                        <th class="wd-20p" style="width:10%">Age</th>
                        <th class="wd-20p" style="width:10%">Month</th>
                       <!--  <th class="wd-20p">Update</th>
                       <th class="wd-20p">Delete</th> -->
                     </tr>
                   </thead>

                   <tbody>
                    <?php
                    include('connect.php');
                    $i=1;
                    $query=mysqli_query($con,"SELECT * FROM `tbl_pregnant`") or die(mysqli_error($con));
                    while ($row=mysqli_fetch_array($query)) {?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['phone'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td><?php echo $row['child'];?></td>
                      <td><?php echo $row['weight'] ?></td>
                      <td><?php echo $row['height'] ?></td>
                      <td><?php echo $row['age'] ?></td>
                      <td><?php echo $row['month'] ?></td>
                      
                       <!--   <td><a href="updatecenter.php?crid=<?php echo $row['rid']; ?>" ><i class="btn btn-primary">Update</a></i></td>
              
                          <td><a href="Deletepregnant.php?pid=<?php echo $row['pid']; ?>" ><i class="btn btn-danger">delete</a></i></td>
                        -->
                      </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
                  <br>
                  <form class="" action="Controller/generate_report.php" method="POST">
                    <div class="row">
                   
                        <!-- Excel Width -->
                        <div class="col-md-3 ml-auto">
                          <input type="text" name="filename" class="form-control" value="tbl_pregnant" hidden>
                          <!-- <input type="text" name="format" class="form-control" value=".xls">  -->
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <button class="btn btn-sm btn-inverse-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Format</button>
                              <div class="dropdown-menu">
                                <button type="button" id="optn_xls" class="dropdown-item">Excel</button>
                                <div role="separator" class="dropdown-divider"></div>
                                <button type="button" id="optn_csv" class="dropdown-item">CSV</button>
                                <div role="separator" class="dropdown-divider"></div>
                                <button type="button" id="optn_sql" class="dropdown-item">SQL</button>
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

    <script src="../assets/js/custom_js.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- endinject -->


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.jqueryui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
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

    $(document).ready(function() {
      var table = $('#example').DataTable( {
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
      } );
   
      table.buttons().container()
          .insertBefore( '#example_filter' );



      $('.buttons-pdf').attr('hidden','true');
      $('.buttons-excel').attr('hidden','true');

      
      // $('#example_filter').html('<input type="search" class="form-control" placeholder="Search" aria-controls="example">');
      // $('#example_filter').addClass("form-control");
      // $('#example_filter').addClass("form-control");buttons-colvis
      $('.dt-button').css({"background-color": "#f0e2ff", "border-radius": "3px"});
      $('.ui-button-text').css({"color": "#b66dff", "font-size": "0.875rem", "font-family": '"ubuntu-bold", sans-serif'});
      // $('.ui-state-active').addClass({"form-control"});

    } );
      
    </script>                           
  </body>
</html>