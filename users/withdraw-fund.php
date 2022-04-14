
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	  <meta name="description" content="and">
  <meta name="author" content="Coinmarkettrading">
 <title> Withdraw Fund | Coinmarkettrading </title>
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
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Deposit
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="deposit.php">Deposit Fund</a>
              <a class="dropdown-item" href="deposit-log.php">Deposit History</a>
             
            </div>
          </li>
          
          <li class="nav-item dropdown  active ">
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
                    <a href=".phpedit-profile" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=".phpearnings" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Earnings</span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href=".phpchange-password" class="nav-link">
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
                    
                    <h3 style="color: red;"> Withdraw Fund</h3>
                    <hr>
						                    <div class="cryptorio-main-form">
						                        <div class="row">
                                               
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Bitcoin</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/bitcoin.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal1" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal1" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Bitcoin</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="1">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Ethereum</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/ethereum.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal2" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal2" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Ethereum</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="2">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Litecoin</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/litecoin.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal3" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal3" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Litecoin</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="3">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Bank Wire</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/bankwire.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal4" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal4" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Bank Wire</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="4">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Bitcoincash</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/bitcoincash.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal5" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal5" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Bitcoincash</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="5">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Usdt</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/usdt.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal6" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal6" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Usdt</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="6">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Dogecoin</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/dogecoin.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal7" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal7" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Dogecoin</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="7">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Binance</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/binance.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal8" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal8" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Binance</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="8">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Algorand</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/algorand.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal9" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal9" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Algorand</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="9">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                                       
                    <div class="col-md-3 col-lg-3">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 style="color: white;">Shib</h4>
                            </div>
                            <div class="box-body">
                                    <img class="card-img-top" src="../assets/images/gateway/shibainu.png" alt="image">
                            </div>
                            <br>
                            <div class="box-footer">
                                <a data-toggle="modal" data-target="#withdrawModal13" class="btn boxed-btn text-white btn-primary">Select</a>
                             </div>
                        </div>
                    </div>


                                    <div id="withdrawModal13" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header crypt-up">
                                                    <h4 class="crypt-up">Withdraw via
                                                        <strong>Shib</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action=".phpwithdraw-preview">
                                                        <input type="hidden" name="_token" value="KK2nxw0RYQpIQluJhiNxywQzFoWJQKICrgaWlqaO">
                                                        <input type="hidden" name="gateway" value="13">
                                                        <hr/>
                                                        <div class="form-group">
                                                             <label>Amount To Withdraw</label>
                                                            <div class="input-group">
                                                              
                                                                <input type="text" name="amount" class="form-control" id="amount"
                                                                       required>
                                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">BTC </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary white btn-block">
                                                                Preview
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                   
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



	
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