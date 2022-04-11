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
                <h1 class="text-light">Add your withdrawal info</h1>
            </div>
                    
                                <div class="mb-4 row">
                <div class="col card p-3 shadow-lg bg-dark">
                    <div class="accordion accordion-light ">
                        <form method="post" action="https://coinscaptrading.com/account/dashboard/updateacct">
                        <!--............................... collapse one -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Bank transfer
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">Bank Name</h5>
                                        <input type="text" name="bank_name" value="" class="form-control text-light bg-dark" placeholder="Enter bank name">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-light">Account Name</h5>
                                        <input type="text" name="account_name" value="" class="form-control  text-light bg-dark" placeholder="Enter Account name">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-light">Account Number</h5>
                                        <input type="text" name="account_no" value="" class="form-control text-light bg-dark" placeholder="Enter Account Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--............................... collapse two -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    BItcoin
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">BTC ADDRESS</h5>
                                        <input type="text" name="btc_address" value="" class="form-control text-light bg-dark" placeholder="Enter Bitcoin Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                <!--............................... collapse three -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                Ethereum
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">ETH ADDRESS</h5>
                                        <input type="text" name="eth_address" value="" class="form-control text-light bg-dark" placeholder="Enter Etherium Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--............................... collapse four -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Litcoin
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light bg-dark">LTC ADDRESS</h5>
                                        <input type="text" name="ltc_address" value="" class="form-control text-light bg-dark" placeholder="Enter Litcoin Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--......................... end of collaps four -->
                        <input type="submit" class="btn btn-primary" value="Submit">  &nbsp; &nbsp; 
                        
                        <input type="hidden" name="id" value="282">
                        <input type="hidden" name="_token" value="CO3J1r7yvcO257PSFss1N23wnDSTATa7LIyxEYYa">
                        </form>
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