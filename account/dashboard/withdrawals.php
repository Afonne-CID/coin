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
            <h1 class="title1 text-light">Request for Withdrawal</h1>
            </div>
                    
                                <div class="mb-5 row">
                                <div class="col-lg-4 p-3 rounded card bg-dark">
                    <div class="shadow card-body border-danger">
                    <h2 class="card-title mb-3 text-light"> Bitcoin</h2>
                        <h4 class="text-light">Minimum amount: <strong style="float:right;"> $10</strong></h4><br>
                        
                        <h4 class="text-light">Maximum amount:<strong style="float:right;"> $2000000</strong></h4><br>
                        
                        <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $0</strong></h4><br>
                        
                        <h4 class="text-light">Charges (%): <strong style="float:right;"> 2%</strong></h4><br>
                        
                        <h4 class="text-light">Duration:<strong style="float:right;"> Instant</strong></h4><br>
                        <div class="text-center">
                                                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#withdrawalModal1"><i class="fa fa-plus"></i> Request withdrawal</a>
                                                                
                        </div>
                        
                    </div>
                </div>
                
                    <!-- Withdrawal Modal -->
                    <div id="withdrawalModal1" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header bg-dark">
                          <h4 class="modal-title text-light">Payment will be sent through your selected method.</h4>
                            <button type="button" class="close text-light" data-dismiss="modal">×</button>
                          </div>
                          <div class="modal-body bg-dark">
                                <form style="padding:3px;" role="form" method="post" action="https://coinscaptrading.com/account/dashboard/withdrawal">
                                       <input class="form-control text-light bg-dark" placeholder="Enter amount here" type="text" name="amount" required=""><br>
                                       <input class="form-control text-light bg-dark " value="Bitcoin" type="text" disabled=""><br>
                                       <input value="Bitcoin" type="hidden" name="payment_mode">
                                       <input value="1" type="hidden" name="method_id"><br>
                                       
                                       <input type="hidden" name="_token" value="CO3J1r7yvcO257PSFss1N23wnDSTATa7LIyxEYYa">
                                       <input type="submit" class="btn btn-primary" value="Submit" onclick="this.disabled = true; form.submit(); this.value='Please Wait ...';">
                               </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Withdrawals Modal -->
                                        </div>
            <!-- Withdrawal Modal -->
            <div id="withdrawdisabled" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Withdrawal Status</h4>
                      <button type="button" class="close text-light" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body bg-dark">
                        <h4 class="text-light">Withdrawal is Disabled at this time, Please contact admin for more details</h4>  
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Withdrawals Modal -->
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