<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	header('location: ../login.php');
  }
?>

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

         <div class="main-panel">
            <div class="content">
               <div class="page-inner">
                  <div class="mt-2 mb-4">
                     <h2 class="text-light pb-2">Welcome, Jabajaba!</h2>
                  </div>
                  <!-- Beginning of  Dashboard Stats  -->
                  <div class="row row-card-no-pd bg-dark shadow-lg">
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body ">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="fa fa-download text-warning"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Deposited</p>
                                       <h4 class="card-title text-light">$0.00</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body ">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="flaticon-coins text-success"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Profit</p>
                                       <h4 class="card-title text-light">$0.00</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="fa fa-gift text-danger"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Bonus</p>
                                       <h4 class="card-title text-light">$ 0.00</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="fa fa-retweet text-primary"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Ref. Bonus</p>
                                       <h4 class="card-title text-light">$0.00</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body ">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="flaticon-coins text-success"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Balance</p>
                                       <h4 class="card-title text-light">$0.00</h4>
                                       <br>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="fa fa-envelope text-danger"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Total Packages</p>
                                       <h4 class="card-title text-light">0</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-dark">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3">
                                    <div class="text-center icon-big">
                                       <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 col-stats">
                                    <div class="numbers">
                                       <p class="card-category">Active Packages</p>
                                       <h4 class="card-title text-light">0</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Beginning of chart -->
                  <div class="row">
                     <div class="pt-1 col-12">
                        <h3>Personal Trading Chart</h3>
                        <div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;">
                           <div id="tradingview_f933e">
                              <div id="tradingview_4a65c-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: calc(550px - 32px);margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;">
                                 <div style="width: 100%;height: calc(550px - 32px);background: transparent;padding: 0 !important;"><iframe id="tradingview_4a65c" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_4a65c&amp;symbol=COINBASE%3ABTCUSD&amp;interval=1&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=BB%40tv-basicstudies&amp;theme=dark&amp;style=9&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=coinscaptrading.com&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div>
                              </div>
                           </div>
                           <div class="tradingview-widget-copyright" style="width: 100%;"><a href="#" rel="noopener" target="_blank"><span class="blue-text"></span> <span class="blue-text">Personal trading chart</span></a></div>
                           <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                           <script type="text/javascript">
                              new TradingView.widget(
                              {
                              "width": "100%",
                              "height": "550",
                              "symbol": "COINBASE:BTCUSD",
                              "interval": "1",
                              "timezone": "Etc/UTC",
                              "theme": 'dark',
                              "style": "9",
                              "locale": "en",
                              "toolbar_bg": "#f1f3f6",
                              "enable_publishing": false,
                              "hide_side_toolbar": false,
                              "allow_symbol_change": true,
                              "calendar": false,
                              "studies": [
                              	"BB@tv-basicstudies"
                              ],
                              "container_id": "tradingview_f933e"
                              }
                              );
                           </script>
                        </div>
                     </div>
                     <div class="white-box" style="height: 450px; width:100%">
                        <h4 style="margin-bottom:5px;"> Forex Market Fundamental Data</h4>
                        <!-- TradingView Widget BEGIN -->
                        <div style="width: 100%; height: 100%;">
                           <style>
                              .tradingview-widget-copyright {
                              font-size: 13px !important;
                              line-height: 32px !important;
                              text-align: center !important;
                              vertical-align: middle !important;
                              /* @mixin sf-pro-display-font; */
                              font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                              color: #9db2bd !important;
                              }
                              .tradingview-widget-copyright .blue-text {
                              color: #2962FF !important;
                              }
                              .tradingview-widget-copyright a {
                              text-decoration: none !important;
                              color: #9db2bd !important;
                              }
                              .tradingview-widget-copyright a:visited {
                              color: #9db2bd !important;
                              }
                              .tradingview-widget-copyright a:hover .blue-text {
                              color: #1E53E5 !important;
                              }
                              .tradingview-widget-copyright a:active .blue-text {
                              color: #1848CC !important;
                              }
                              .tradingview-widget-copyright a:visited .blue-text {
                              color: #2962FF !important;
                              }
                           </style>
                           <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/forex-cross-rates/?locale=en#%7B%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22BTC%22%2C%22ETH%22%2C%22LTC%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22utm_source%22%3A%22coinscaptrading.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%7D" style="box-sizing: border-box; height: calc(100% - 32px); width: 100%;"></iframe>
                           <div style="height: 32px; line-height: 32px; width: 100%; text-align: center; vertical-align: middle;"><a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;"></a></div>
                        </div>
                     </div>
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