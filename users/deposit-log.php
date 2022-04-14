
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	  <meta name="description" content="and">
  <meta name="author" content="Coinmarkettrading">
 <title> Deposit Log | Coinmarkettrading </title>
    <link rel="icon" type="image/png" href="../assets/images/logo/favicon.png" />
  <link rel="stylesheet" href="./coin/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">
  <link href="../assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
 <!-- toast CSS -->
    <link href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">

	   	   
	   
	   
	   
	   
	   

<script src="//code.tidio.co/4ug8n4oqcfe8lyoykr6zysmyspzyrq5a.js" async></script>





	   
</head>

<body id="dark">
  <header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="home.php"><img src="../assets/images/logo/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
		
		 <li class="nav-item">
            <a class="nav-link " href="home.php">Trading</a>
          </li>
		  
		  
          <li class="nav-item dropdown  ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
             Transactions
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="trade-history.php">Trade History</a>
              <a class="dropdown-item " href="earnings.php">Earnings</a>
             
            </div>
          </li>
          <li class="nav-item dropdown  active ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Deposit
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="deposit.php">Deposit Fund</a>
              <a class="dropdown-item" href="deposit-log.php">Deposit History</a>
             
            </div>
          </li>
          
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Withdraw
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="withdraw-fund.php">Withdraw Funds</a>
              <a class="dropdown-item" href="withdraw-log.php">Withdrawal History</a>
             
            </div>
          </li>
		  
		   <li class="nav-item ">
            <a class="nav-link " href="plan">Plans</a>
          </li>
		  
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="clickFullscreen">
              <i class="icon ion-md-expand"></i>
            </a>
          </li>
          <li class="nav-item dropdown header-custom-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="icon ion-md-notifications"></i>
              <span class="circle-pulse"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium">0 Messages</p>
               
              </div>
              <div class="dropdown-body">
			  				
				
                
              </div>
              <div class="dropdown-footer d-flex align-items-center justify-content-center">
			  	              
              </div>
            </div>
          </li>
          <li class="nav-item dropdown header-img-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
                  <img src="./coin/img/avatar.svg" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
				
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">momamoma</p>
                 
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item ">
                    <a href="edit-profile" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="earnings" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Earnings</span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="change-password" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Change Password</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/logout.php"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="nav-link red">
                      <i class="icon ion-md-power"></i>
                      <span>Log Out</span>
                    </a>
					<form id="logout-form" action="/logout.php" method="POST"
              style="display: none;">
                <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">            </form>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
	 

 <div class="wallet ptb70">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
            <a class="nav-link d-flex justify-content-between align-items-center active" data-toggle="pill"
              href="#coinBTC" role="tab" aria-selected="true">
              <div class="d-flex">
                <img src="./coin/img/icon/18.png" alt="btc">
                <div>
                  <h2>BTC Balance</h2>
                  <p>Bitcoin</p>
                </div>
              </div>
              <div>
             
                <p class="text-right"><i class="icon ion-md-lock"></i> 0</p>
              </div>
            </a>
                <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinETH"
              role="tab" aria-selected="true">
              <div class="d-flex">
                <img src="./coin/img/icon/usd.png" alt="USD">
                <div>
                  <h2>USD Balance</h2>
                  <p>US Dollars</p>
                </div>
              </div>
              <div>
             
                <p class="text-right"><i class="icon ion-md-lock"></i> 0</p>
              </div>
            </a>
              </div>
        </div>
        <div class="col-md-12 col-lg-8">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="coinBTC" role="tabpanel">
                  <h2 class="wallet-title">Deposit Log</h2>
              
                  
                  


 <div class="wallet-history">
                <table class="table">
                                <thead>					
                                  <tr class="bg-dark">

                                        <th class="text-yellow" scope="col">S/N</th>
                                        <th class="text-yellow" scope="col">Transaction</th>
                                        <th class="text-yellow" scope="col">Details</th>
                                        <th class="white" scope="col">Amount Deposited</th>
                                        <th class="text-yellow" scope="col">Amount in BTC</th>
                                        <th class="text-yellow" scope="col">Time</th>
                                  </tr>
                                </thead>
                                <tbody>
                                                                                    <tr>
                                                <td colspan="5"> You don't have any deposit history !!</td>
                                            </tr>
                                                         
                                </tbody>
                              </table>
                           </div>
                      </div>
                    <!-- /.box-body -->
                    </div>
                </div>   
                <!-- /.box -->
            </div>
   
          
     </section>                  
	
	</div>
  <footer></footer>
  <script src="./coin/js/jquery-3.4.1.min.js"></script>
  <script src="./coin/js/popper.min.js"></script>
  <script src="./coin/js/bootstrap.min.js"></script>
  <script src="./coin/js/amcharts-core.min.js"></script>
  <script src="./coin/js/amcharts.min.js"></script>
  <script src="./coin/js/custom.js"></script>

<script src="../assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	 <script src="../assets/vendor_components/sweetalert/sweetalert.min.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146911000-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146911000-1');
</script>

</body>

</html>