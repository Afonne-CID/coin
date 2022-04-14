
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	  <meta name="description" content="and">
  <meta name="author" content="Cointoptrading">
 <title> Dashboard | Coinmarkettrading </title>
    <link rel="icon" type="image/png" href="../assets/images/logo/favicon.png" />
  <link rel="stylesheet" href="https://m.cointoptrading.com/coin/css/style.css">
  <link href="../assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
 <!-- toast CSS -->
    <link href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">
<script src="//code.tidio.co/4ug8n4oqcfe8lyoykr6zysmyspzyrq5a.js" async></script> 
</head>

<body id="dark">
  <header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="user/home"><img src="../assets/images/logo/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
		
		 <li class="nav-item">
            <a class="nav-link " href="./user/home">Trading</a>
          </li>
		  
		  
          <li class="nav-item dropdown  ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
             Transactions
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="./user/trade-history">Trade History</a>
              <a class="dropdown-item " href="./user/earnings">Earnings</a>
             
            </div>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Deposit
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./user/deposit">Deposit Fund</a>
              <a class="dropdown-item" href="./user/deposit-log">Deposit History</a>
             
            </div>
          </li>
          
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Withdraw
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./user/withdraw-fund">Withdraw Funds</a>
              <a class="dropdown-item" href="./user/withdraw-log">Withdrawal History</a>
             
            </div>
          </li>
		  
		   <li class="nav-item ">
            <a class="nav-link " href="./user/plan">Plans</a>
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
                  <img src="https://m.cointoptrading.com/coin/img/avatar.svg" alt="avatar">
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
                    <a href="./user/edit-profile" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./user/earnings" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Earnings</span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="./user/change-password" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Change Password</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="logout"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="nav-link red">
                      <i class="icon ion-md-power"></i>
                      <span>Log Out</span>
                    </a>
					<form id="logout-form" action="logout" method="POST"
              style="display: none;">
                <input type="hidden" name="_token" value="4oVWmxvFLk9NEtNzCmBWXrs2L4XSGjrpuNkIgATK">            </form>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
	 

  <div class="container-fluid mtb15 no-fluid">
    <div class="row sm-gutters">
      <div class="col-md-12 mb15">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="width: 100%; height: 46px;">
          <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22cointoptrading.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D" style="box-sizing: border-box; height: 46px; width: 100%;"></iframe>
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
            </div>
                  <!-- TradingView Widget END -->
        </div>
	  
	  
	       <div class="col-md-9">
        <div class="main-chart">
		<div class="row">
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>BTC Balance</h2>
              <p>0</p>
              <span class="green">BTC</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartBtcDark"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>USD Balance</h2>
              <p>0</p>
              <span class="red">USD</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartEthDark"></div>
            </div>
          </div>
        </div>
        
       
        
        
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>Account Info</h2>
              <p> <button class="btn btn-primary">Plan: STARTER</button><br><br>
			 <img src="https://m.cointoptrading.com/coin/message-icon-transparent-11.jpg"  width="50" height="50"  alt="messages" > 
			  <span class="">0 Messages</span>				  
			   </p>
			  
			  			  <span class="red"><a href="./user/request-demo/37" class="btn btn-danger">REQUEST FOR DEMO</a></span>
			   			  </div>
			  <br>
			   <div class="markets-chart">
           
            </div>
          
          </div>
        </div>
		</div>
		
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8053"></div>
            <script src="https://m.cointoptrading.com/coin/js/s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "Dark",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8053"
                }
              );
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
		</div>
		
		
      <div class="col-md-3">
	  <div class="market-trade mt15">
	  <h2  style="color:green"> Live Trading </h2>
	  
	    <form role="form" action="" id="tradelive" method="POST" enctype="application/x-www-form-urlencoded">
                        <input type="hidden" name="_token" value="4oVWmxvFLk9NEtNzCmBWXrs2L4XSGjrpuNkIgATK">
						
<div class="market-trade-buy">
                  <div class="input-group">
				
                  <select   name="category" id="category"  class="crypt-image-select">
	                                                     <option value="2" onclick="showOptions('2')"> Cryptocurrency </option>
                                      
										    </select>
                  </div>
				  
				  <div class="input-group">
				
                  <select  name="symbols" onclick="if (typeof(this.selectedIndex) != 'undefined') check(this.selectedIndex)" id="showsymbols" class="crypt-image-select">
										                                           <option value="2" onclick="showOptions('2')"> Symbol </option>
                                      
										    </select>
                  </div>
				  
				  
				   <div class="input-group">
				 
                  <select name="strikerate" id="strikerate" class="crypt-image-select">
										                                        <option value="" selected>Choose...</option>
                                        <option id="rate1">Choose...</option>
                                        <option id="rate2">Choose...</option>
                                        <option id="rate3">Choose...</option>
                                        <option id="rate4">Choose...</option>
                                        <option id="rate5">Choose...</option>
                                      
										    </select>
												 
                                <div class="help-block text-center" id="percentshow"></div>
                                    </div>
                  </div>
				  
				  
                  <div class="input-group">
                    <input  type="number" id="amount_trade" required name="amount" value="100" data-decimals="2" min="50" step="50" >
                    <div class="input-group-append">
                      <span class="input-group-text">Amount</span>
                    </div>
                  </div>
				  
				    <div class="input-group">
				
                  <select  name="interval" id="interval"  class="crypt-image-select">
										                                         <option value="60">1 min</option>
                                            <option value="180">3 min</option>
                                            <option value="300">5 min</option>
                                            <option value="900">15 mins</option>
                                            <option value="1800">30 mins</option>
                                            <option value="3600">1 hr</option>
                                            <option value="7200">2 hr</option>
                                            <option value="86400">1 day</option>
                                      
										    </select>
                  </div>
				  <input type="hidden" name="timestriked" id="timestriked"  />
                            <input type="hidden" name="buypercent" id="buypercentinput"  />
                           
                            <input type="hidden" name="sellpercent" id="sellpercentinput"  />
                            <input type="hidden" name="unit_currency" value="0.00002428"  />
                            <input type="hidden" name="price" id="priceinput"  />
                            <input type="hidden" name="rate" id="rate"  />
                            <input type="hidden" name="trade_type" value="live"  />
							 
							  
							  	<label class="text-success" id="buyamount"></label>
                  <button  type="submit" id="buy" class="btn buy">Buy</button>
				   <label class="text-danger" id="sellamount"></label>
				   <button type="submit" id="sell"  class="btn sell">Sell</button>
                </div>
				
				 </form>
      </div>
 
 
 
 
       
      </div>
    <div class="container-fluid">
        <div class="row sm-gutters">
             <div class="col-xl-12">
                <div>
                    <div class="crypt-market-status">
                        <div>
                            <br>
                            <ul class="nav nav-tabs">
                                <li role="presentation"><a href="#active-orders" class="active" data-toggle="tab">Recent Trading Activities
</a></li>
                               
                            </ul>
                            
              <div class="tab-content" id="'tradehistory"">
                                <div role="tabpanel" class="tab-pane active" id="tradehistory"">
                                    
            
                    <div class="spinner-border text-secondary" role="status">
                            <span class="sr-only">Loading...</span>
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
  <script src="https://m.cointoptrading.com/coin/js/jquery-3.4.1.min.js"></script>
  <script src="https://m.cointoptrading.com/coin/js/popper.min.js"></script>
  <script src="https://m.cointoptrading.com/coin/js/bootstrap.min.js"></script>
  <script src="https://m.cointoptrading.com/coin/js/amcharts-core.min.js"></script>
  <script src="https://m.cointoptrading.com/coin/js/amcharts.min.js"></script>
  <script src="https://m.cointoptrading.com/coin/js/custom.js"></script>

<script src="../assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	 <script src="../assets/vendor_components/sweetalert/sweetalert.min.js"></script>
	 <!-- Crypto_Admin for demo purposes -->
    <script src="https://m.cointoptrading.com/js/demo.js"></script>
	<script src="../assets/vendor_components/bootstrap-input-spinner/src/bootstrap-input-spinner.js"></script>


<script type="text/javascript">

    $("input[type='number']").inputSpinner();

    //auto select
    showOptions($('#category').val());

    var t;
    var co = 0;

    var ont = false;

    //showOptions(2);

    function showOptions( cat_id )
    {
        $.getJSON('get-symbols/'+cat_id, function(d){
           var htmlop = ''; 
            for(i=0; i < d.length; i++)
            {
                window.localStorage.removeItem('pair'+d[i].id);
                
                window.localStorage.setItem('pair'+d[i].id, JSON.stringify(d[i]));
                
                htmlop += '<option value="'+d[i].id+'" onclick=setOption('+ d[i].id +')>'+d[i].pair_name+'</option>';
            }
            $('#showsymbols').html(htmlop);

            setOption($('#showsymbols').val());

        });
    }

    

    function randombetween(min, max) {
        return Math.floor(Math.random()*(max-min+1)+min);
    }
    
    
    function check( obj )
    {
        console.log( obj );
        
        setOption($('#showsymbols option:eq('+obj+')').val());
    }


    function setOption( opt )
    {
        var optparam =  JSON.parse(window.localStorage.getItem('pair'+opt));
        console.log(optparam);
        $('#amount_trade').attr('min', optparam.minimum);
        $('#amount_trade').attr('step', optparam.step);
        $('#amount_trade').val( optparam.minimum );

        
        
        const products = [
        { 
            id: ''+optparam.fromsym+'-'+optparam.tosym,
            label: ''+optparam.pair_name,
        }];


        const subscribe = {
        type: 'subscribe',
        channels: [
        {
            name: 'ticker',
            product_ids: products.map(product => product.id),
        }
        ]};


       const ws = new WebSocket('wss://ws-feed.pro.coinbase.com');
        ws.onopen = () => {
            ws.send(JSON.stringify(subscribe));
        };

        const lastUpdate = 0;
          
        var coinCurrentPrices = 0;
        var coinInitialPrices = 0;


        ws.onmessage = (e) => {
            const value = JSON.parse(e.data);
            console.log( value );
            if (value.type !== 'ticker') {
                return;
            }

            var strikerate = '';
            var saveprice = [];
            var prices = new Array(5);
            var buy = new Array(5);
            var sell = new Array(5);
            var rate = new Array(5);
            var max = 100;
            var price = parseFloat(value.price);

            console.log(value.product_ids);
            for(i=0; i < prices.length; i++)
            {
                prices[i] = parseFloat(value.price).toFixed(2) + (Math.floor(Math.random() * 90) + 10);
            }

            prices.sort(function(a, b){return b-a});

            buy[0] = randombetween(1, max-4);
            buy[1] = randombetween(1, max-3-buy[0]);
            buy[2] = randombetween(1, max-2-buy[0]-buy[1]);
            buy[3] = randombetween(1, max-1-buy[0]-buy[1]-buy[2]);
            buy[4] = max - buy[0] - buy[1] - buy[2] - buy[3];
                
            sell[4] = randombetween(1, max-4);
            sell[3] = randombetween(1, max-3-sell[4]);
            sell[2] = randombetween(1, max-2-sell[3]-sell[4]);
            sell[1] = randombetween(1, max-1-sell[2]-sell[3]-sell[4]);
            sell[0] = max - sell[4] - sell[3] - sell[2] - sell[1];

            sell.sort(function(a, b){return b-a});

            buy.sort(function(a, b){return b-a});

    
            for(i=0; i < prices.length; i++){

                rate[i] = (i == 0) ? 'highest_buy' : rate[i];
                rate[i] = (i == 1) ? 'high_buy' : rate[i]; 
                rate[i] = (i == 2) ? 'normal' : rate[i]; 
                rate[i] = (i == 3) ? 'high_sell' : rate[i]; 
                rate[i] = (i == 4) ? 'highest_sell' : rate[i]; 
                
                strikerate += '<option value="'+prices[i]+'" data-rate="'+rate[i]+'" data-buy="'+buy[i]+'" data-sell="'+(sell[(prices.length-1) - i])+'" ><span style="background:green">'+buy[i]+'%</span> & <span style="background:red">'+(sell[(prices.length-1) - i])+'%</span> </option>';
            }

            var pricehtmlid = $("input[name='price']").val(parseFloat(value.price).toFixed(4));

            $("#priceshow").html(parseFloat(value.price).toFixed(4));

            //.val(parseFloat(value.price).toFixed(4));

            if (!coinInitialPrices) {
                coinInitialPrices = price;
            }

            coinCurrentPrices = price


            var stat = coinInitialPrices ? ((coinCurrentPrices - coinInitialPrices) / coinInitialPrices) * 100: 0.00;
              console.log(coinInitialPrices);
              console.log(coinCurrentPrices);
              if(stat >= 0){
                $('#percentshow').html('<p class="text-success"><i class="fa fa-up"></i>'+stat.toFixed(4) + '%</p>');                  
              }else{
                $('#percentshow').html('<p class="text-danger"><i class="fa fa-down"></i>'+stat.toFixed(4) + '%</p>');                  
              }
            

            $('#strikerate').html(strikerate);

            var firstbuy = $('#strikerate > option:selected').data('buy');
            var firstsell = $('#strikerate > option:selected').data('sell');
            var rate = $('#strikerate > option:selected').data('rate');
            
            var $changedInput = $("#amount_trade");
            if(firstbuy != undefined){
                processPayout(firstbuy, firstsell, rate);
            }

            $changedInput.on("input", function (event) {

                if(firstbuy != undefined){
                    processPayout(firstbuy, firstsell, rate);
                }
            });

            $changedInput.on("change", function (event) {

                if(firstbuy != undefined){
                    processPayout(firstbuy, firstsell, rate);
                }
            });


        };

    }

    $(document).ready(function(){
        $('#buy').on('click', function(e){
            e.preventDefault();
            $(this).attr('disabled', 'disabled');
            $(this).html('<i class="fa fa-spin fa-spinner"></i>');

            var btnbuy = $(this);

           $("#timestriked").val(new Date().toUTCString());

            var dataPost = $('#tradelive').serialize() + '&submit=trade_up';

            var token = $("input[name='_token']").val();
            
            $('#tradelive')[0].reset();

            $.ajax({                
                url: './user/tradelive/buy',
                data: dataPost,
                method: "POST",
                dataType: "json",
                success: function( data ){
                    console.log( data );
                    $('.balance-btc').text(data.btc_balance);
                    $('.balance-currency').text(data.balance_currency);
                    swal("Buy Order Traded", data.message, "success");
                   $('#strikerateused').removeAttr('id').attr('id', 'strikerate');
                   clearInterval(t);
                   t = setInterval("tradehistory()", 2000);
                   co = data.secs_left;
                   console.log(co);
                   btnbuy.removeAttr('disabled');
                   btnbuy.html('<i class="ti ti-angle-up"></i>');

                },
                error: function (data) {
                    if( data.status === 422 ) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            //console.log(key+ " " +value);
                            var error_message = '';
                            if($.isPlainObject(value)) {
                                $.each(value, function (key, value) { 
                                    error_message = value;
                                });
                            }else{
                                error_message = value;
                            }
                            console.log(error_message);
                            if(key == 'Limit'){
                                swal({ 
                                    title: "UPGRADE REQUIRED",
                                    text: error_message,
                                    type: "warning",
                                    confirmButtonText: "UPGRADE NOW",
                                    allowOutsideClick: 1
                                    
                                  },
                                  function(){
                                    window.location.href = "./user/plan";
                                });
                            }
                            else
                            swal(key + " Invalid!", error_message, "error");
                            btnbuy.removeAttr('disabled');
                            btnbuy.html('<i class="ti ti-angle-up"></i>');
                        });
                    }
                },
            });
        });

        $('#sell').on('click', function(e){
            e.preventDefault();
            $(this).attr('disabled', 'disabled');
            $(this).html('<i class="fa fa-spin fa-spinner"></i>');

            var btnsell = $(this);

            //make another one
            $("#timestriked").val(new Date().toUTCString());

            var dataPost = $('#tradelive').serialize() + '&submit=trade_down';

            var token = $("input[name='_token']").val();
            
            $('#tradelive')[0].reset();

            $.ajax({
                type: 'POST',
                url: './user/tradelive/sell',
                data: dataPost,
                dataType: "json",
                success: function( data ){
                    clearInterval(t);
                    console.log( data );
                    $('.balance-btc').text(data.btc_balance);
                    $('.balance-currency').text(data.balance_currency);
                    swal("Sell Order Traded", data.message, "success");
                   $('#strikerateused').removeAttr('id').attr('id', 'strikerate');
                   clearInterval(t)
                   t = setInterval("tradehistory()", 2000);
                   co = data.secs_left;
                   btnsell.removeAttr('disabled');
                   btnsell.html('<i class="ti ti-angle-down"></i>');

                },
                error: function (data) {
                    if( data.status === 422 ) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            // console.log(key+ " " +value);
                    
                            var error_message = '';
                            if($.isPlainObject(value)) {
                                $.each(value, function (key, value) { 
                                    error_message = value;
                                });
                            }else{
                                error_message = value;
                            }
                            console.log(error_message);
                            if(key == 'Limit'){
                                swal({ 
                                    title: "UPGRADE REQUIRED",
                                    text: error_message,
                                    type: "warning",
                                    confirmButtonText: "UPGRADE NOW",
                                    allowOutsideClick: 1                        
                                  },
                                  function(){
                                    window.location.href = "./user/plan";
                                });
                            }
                            else
                            swal(key + " Invalid!", error_message, "error");
                            
                            btnsell.removeAttr('disabled');
                            btnsell.html('<i class="ti ti-angle-down"></i>');

                        });
                    }
                },
            });
        });

        $('#strikerate').on('change', function() {
            // var buy = $(this).data('buy');
            // var sell = $(this).data('sell');
            var buy = $("option:selected", this).data('buy');
            var sell = $("option:selected", this).data('sell');
            var rate = $("option:selected", this).data('rate');

            //interval
            processPayout(buy, sell, rate);
            
            //var valueSelected = this.value;
           // console.log(optionSelected);

        });

    });
    

    t = setInterval("tradehistory()", 2000);


    function processPayout(buy, sell, rate)
    {

        if(buy == undefined)
        return;

        if(sell ==undefined)
        return; 

        amount = $('#amount_trade').val(); 

        $('#buypercent').text(buy+'%');
        $('#sellpercent').text(sell+'%');

        var buyamount = ((buy/100) * amount).toFixed(2);
        var sellamount = ((sell/100) * amount).toFixed(2);

        $('#buyamount').text('$'+buyamount);
        $('#sellamount').text('$'+sellamount);

        $('#buypercentinput').val(buyamount);
        $('#sellpercentinput').val(sellamount);
        $('#rate').val(rate);

        $('#strikerate').removeAttr('id').attr('id', 'strikerateused');

    }

    

    function tradehistory()
    {
        $('#tradehistory').load('./user/gethistory');

        ont = true;

        if(co < 2){
            clearInterval(t);
        }
        if(co > 0){
            co = co - 2;
        }

        console.log('Down '+ co);
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