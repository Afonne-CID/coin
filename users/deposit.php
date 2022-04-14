
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	  <meta name="description" content="and">
  <meta name="author" content="Coinmarkettrading">
 <title> Select Payment Gateways | Coinmarkettrading </title>
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
            <a class="nav-link " href="plan.php">Plans</a>
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
	    
    <div class="container">
        <div class="row">
                    </div>
    </div>       

 <div class="container">
        
           
            <div class="col-md-12">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    
                    <h3  style="color: red;"> Select Payment Gateways</h3>
                    <hr>
						                    <div class="cryptorio-main-form">
						                        <div class="row">
                                             <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Bitcoin</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/bitcoin.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal1" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Bitcoin</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="1">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin1" value="" />
                                           <input type="hidden" name="coin_code" value="BTC" />
                                        

                                        <h4 class="conversion1 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 1, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Ethereum</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/ethereum.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal2" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Ethereum</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="2">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin2" value="" />
                                           <input type="hidden" name="coin_code" value="ETH" />
                                        

                                        <h4 class="conversion2 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 2, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Litecoin</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/litecoin.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal3" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal3" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Litecoin</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="3">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin3" value="" />
                                           <input type="hidden" name="coin_code" value="LTC" />
                                        

                                        <h4 class="conversion3 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 3, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">LTC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                                                        <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Bitcoincash</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/bitcoincash.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal5" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal5" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Bitcoincash</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="5">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin5" value="" />
                                           <input type="hidden" name="coin_code" value="BCH" />
                                        

                                        <h4 class="conversion5 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 5, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">BCH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Usdt</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/usdt.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal6" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal6" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Usdt</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="6">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin6" value="" />
                                           <input type="hidden" name="coin_code" value="USDT" />
                                        

                                        <h4 class="conversion6 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 6, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">USDT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Dogecoin</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/dogecoin.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal7" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal7" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Dogecoin</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="7">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin7" value="" />
                                           <input type="hidden" name="coin_code" value="DOGE" />
                                        

                                        <h4 class="conversion7 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 7, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">DOGE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Binance</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/binance.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal8" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal8" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Binance</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="8">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin8" value="" />
                                           <input type="hidden" name="coin_code" value="BNB" />
                                        

                                        <h4 class="conversion8 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 8, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">BNB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Algorand</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/algorand.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal9" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal9" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Algorand</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="9">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin9" value="" />
                                           <input type="hidden" name="coin_code" value="ALGO" />
                                        

                                        <h4 class="conversion9 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 9, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ALGO</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                                                            <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4  style="color: white;" class="box-title">Shib</h4>
                        </div>
                        <div class="box-body">
                                <img class="card-img-top" src="../assets/images/gateway/shibainu.png" alt="image">
                        </div><br>
                        <div class="box-footer">
                            <a data-toggle="modal" data-target="#depositModal13" class="btn text-white btn-primary">Select</a>  <br><br><br>
                         </div>
                    </div>
                </div>
                <div id="depositModal13" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deposit via <strong>Shib</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <form method="post" autocomplete="off" action="deposit-data-insert">
                                <div class="modal-body">
                                    <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">

                                    <input type="hidden" name="gateway" value="13">
                                    <label class="col-md-12 crypt-up"><strong>DEPOSIT AMOUNT</strong>
                                      
                                           <input type="hidden" name="btc_amount" id="coin13" value="" />
                                           <input type="hidden" name="coin_code" value="USD" />
                                        

                                        <h4 class="conversion13 crypt-up">00 BTC</h4>  
                                    </label>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="amount" onkeyup='coinrate( , 13, this)' class="form-control input-lg" id="amount"
                                                    placeholder=" Enter Amount" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ">Preview</button>

                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                            
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
	 <!-- Crypto_Admin for demo purposes -->

    <script type="text/javascript">
    function coinrate( coin, gate_id, e )
    {
        $('#coin'+gate_id).val((e.value / coin));
        $('.conversion'+gate_id).html((e.value / coin) + ' BTC');
    }
  </script>

<script>
    
</script>


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