<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Coming Soon...</title>
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

      <!-- Fonts and icons -->
      <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
      <!-- CSS Files -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/atlantis.min.css">

      <script
         src="https://code.jquery.com/jquery-3.3.1.js"
         integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
         crossorigin="anonymous">
      </script>
      <script> 
      $(function(){
         $("#header").load("main-header.php");
         $("#sidebar").load("sidebar.html");
         $("#footer").load("footer.html");
         });
      </script> 
   </head>
   <body data-background-color="dark">
      <div class="wrapper">
         
         <!-- Main Header -->
         <div id="header"></div>
         <!-- End Main Header -->

         <!-- Sidebar -->
         <div id="sidebar"></div>
         <!-- End Sidebar -->

         
         <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Your ROI history</h1>
            </div>
                    
                                <div class="row mb-5">
                <div class="col text-center card shadow-lg bg-dark p-3">
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
                        <div id="UserTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="UserTable_length"><label>Show <select name="UserTable_length" aria-controls="UserTable" class="custom-select custom-select-sm form-control form-control-sm bg-dark text-light"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="UserTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm bg-dark text-light" placeholder="" aria-controls="UserTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="UserTable" class="UserTable table table-hover text-light dataTable no-footer" role="grid" aria-describedby="UserTable_info"> 
                            <thead> 
                                <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: activate to sort column ascending" style="width: 62.8594px;">ID</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Plan: activate to sort column ascending" style="width: 90.3281px;">Plan</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 131.438px;">Amount</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 93.9688px;">Type</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Date created: activate to sort column ascending" style="width: 186.406px;">Date created</th></tr> 
                            </thead> 
                            <tbody> 
                                                                <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody> 
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="UserTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="UserTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="UserTable_previous"><a href="#" aria-controls="UserTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="UserTable_next"><a href="#" aria-controls="UserTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
         

         <!-- Footer -->
         <footer id="footer">
         <!-- End Footer-->

         </footer>
        </div>
      </div>
      </div>
      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <!-- jQuery UI -->
      <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
      <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
      <!-- jQuery Scrollbar -->
      <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
      <!-- Chart JS -->
      <script src="../assets/js/plugin/chart.js/chart.min.js"></script>
      <!-- jQuery Sparkline -->
      <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
      <!-- Chart Circle -->
      <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
      <!-- Datatables -->
      <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
      <!-- Bootstrap Notify -->
      <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
      <!-- jQuery Vector Maps -->
      <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
      <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
      <!-- Sweet Alert -->
      <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
      <!-- Atlantis JS -->
      <script src="../assets/js/atlantis.min.js"></script>
   </body>
</html>