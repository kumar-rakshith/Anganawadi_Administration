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
  <title>Campaign Report</title>
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
          <h3 class="page-title" style="color:skyblue;"> Campaing Report</h3>
        </div>
        <!--Undu-->
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">

            <div class="card-body">
              <!--Undu-->
              <h4 class="card-title">View Campaing Report</h4>
              <p class="card-description"><code>All Campaing Report</code>
              </p>
                  <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddCenter()">Add Center</button>
                  <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                  
                  <table id="example" class="table-striped table-bordered table-responsive w-100" style="width:100%">
                    <thead>
                      <tr>
                        <th class="wd-15p">Sl.No</th>
                        <th class="wd-15p">Camp Name</th>
                        <th class="wd-15p">Date</th>
                        <th class="wd-20p">Time</th>
                        <!--  <th class="wd-20p">Address</th> -->
                        <th class="wd-20p">Discription</th>
                        
                       <!--  <th class="wd-20p">Update</th>
                        <th class="wd-20p">Delete</th>
                      -->
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      include('connect.php');
                      $i=1;
                      $query=mysqli_query($con,"SELECT * FROM `tbl_camp`") or die(mysqli_error($con));
                      while ($row=mysqli_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['time'];?></td>
                        <!--    <td><?php echo $row['address'];?></td> -->
                        <td><?php echo $row['discription'] ?></td>

                          <!--  <td><a href="updatecenter.php?crid=<?php echo $row['cid']; ?>" ><i class="btn btn-primary">Update</a></i></td>
                
                          <td><a href="Deletecamp.php?cid=<?php echo $row['cid']; ?>" ><i class="btn btn-danger">delete</a></i></td> -->

                          <!-- <td><a href="Controller/deletecamp.php?cid=<?php echo $row['cid']; ?>" class="btn btn-danger" OnClick="return confirm('are you sure')">delete</a></td> -->
                        </tr>
                        <?php  } ?>
                      </tbody>

                    </table>

                    <br>
                    <form class="" action="Controller/generate_report.php" method="POST">
                      <div class="row">
                     
                          <div class="col-md-2 ml-auto">
                            <input type="text" name="filename" class="form-control" value="tbl_camp" hidden>
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

  <script src="../assets/js/custom_js.js"></script>

  <script>
    $("#optn_xls").click(function(){
      $("#format").val(".xls");
      $("#format_display").val("Excel");
      // alert($("#format_display").val());
    });
    $("#optn_csv").click(function(){
      $("#format").val(".csv");
      $("#format_display").val("CSV");
    });
    $("#optn_sql").click(function(){
      $("#format").val(".sql");
      $("#format_display").val("SQL");
    });

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