<?php

  define('DIR','../');
  require_once DIR.'config.php';

  $control=new Controller();
  $admin=new Admin();

  $admin->notLogged('admin', '../index');

  // $_SESSION['admin'] = 10;
  // echo $_SESSION['admin'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Scheme Applicants Report</title>
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
          <h3 class="page-title" style="color:skyblue;"> Scheme Applicants Report</h3>
        </div>
        <!--Undu-->
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">

            <div class="card-body">
              <!--Undu-->
              <h4 class="card-title">View Applicants Report</h4>
              <p class="card-description"><code>All Applicants Report</code>
              </p>
                  <!-- <button type="submit" class="btn btn-rounded btn-success" style="margin-right:70%;" onclick="AddCenter()">Add Center</button>
                  <input type="text" class="col-xs-2 bg-transparent border-1" placeholder="Search projects" style="margin-left:70%;"><i class="mdi mdi-magnify"></i> -->
                  
                  <table id="example" class="table-striped table-bordered table-responsive w-100" style="width:100%">
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

                                        
                                          <!-- <td><a href="UpdateScheme.php?cid=<?php echo $row['sc_id']; ?>" ><i class="mdi mdi-grease-pencil">Update</i></a></td>
                                          <td><a href="DeleteScheme.php?cid=<?php echo $row['sc_id'] ?>" onclick="return confirm('Are you sure');"><i class="mdi mdi-delete">Delete</i></a></td> 

                                        </tr>
                                        <?php  }?>
                                      </tbody>
                    
                </table>

                    <br>
                    <form class="" action="Controller/generate_report.php" method="POST">
                      <div class="row">
                     
                          <div class="col-md-2 ml-auto">
                            <input type="text" name="filename" class="form-control" value="tbl_application" hidden>
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