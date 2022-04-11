<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="4O5zuCAY8DypYjxUxpfYbPOdz8zAZIeLdsrI1JxR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinsCapTrade | Sign In to Continue</title>
    <link rel="icon" href="storage/app/public/photos/jZA6VYLOGO_white_300px-105x105.png1626128340" type="image/png">
   <!-- Google Fonts -->
  <link href="../css-2?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <script src="../gh/alpinejs/alpine%40v2.8.1/dist/alpine.min.js" defer=""></script>
    <!-- Bootstrap CSS File -->
    <link href="temp/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
        <link href="temp/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="temp/lib/animate/animate.min.css" rel="stylesheet">
        <link href="temp/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="temp/lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <!--<link href="account/temp/lib/jquery/magnific-popup.css" rel="stylesheet">-->
        <link href="temp/lib/aos/aos.css" rel="stylesheet">
        <link href="temp/lib/venobox/venobox.css" rel="stylesheet">
        <link href="temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <script src="../recaptcha/api.js" async="" defer=""></script>
        <link href="temp/css/frontend_style_blue.css" rel="stylesheet">
        
        <!-- JavaScript Libraries -->
        
        <script src="temp/lib/jquery/jquery.min.js"></script>
        <script src="temp/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="temp/lib/jquery.easing/jquery.easing.min.js"></script>
        <!--<script src="account/temp/lib/php-email-form/validate.js"></script>-->
        <script src="temp/lib/waypoints/jquery.waypoints.min.js"></script>
        <script src="temp/lib/counterup/counterup.min.js"></script>
        <script src="temp/lib/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="temp/lib/venobox/venobox.min.js"></script>
        <script src="temp/lib/owl.carousel/owl.carousel.min.js"></script>
        <script src="temp/lib/aos/aos.js"></script>

        <!-- Template Main Javascript File -->
        <script src="temp/js/main.js"></script>

</head>
<body class="d-flex flex-column h-100 auth-page">
    <!-- ======= Loginup Section ======= -->
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center user-auth">
                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                    <div class="mb-4 text-center">
                       
                        <a href="index.htm"><img src="storage/app/public/photos/jZA6VYLOGO_white_300px-105x105.png1626128340" alt="CoinsCapTrade" title="" class="img-fluid"></a>
                                                                             </div>
                    
                    <div class="card ">
                        <h1 class="mt-3 text-center"> User Login</h1>
                        <form method="POST" action="login.php" class="mt-5 card__form">
                            <?php include('errors.php'); ?>
                           <input type="hidden" name="_token" value="4O5zuCAY8DypYjxUxpfYbPOdz8zAZIeLdsrI1JxR">                            <div class="form-group ">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" value="" id="email" placeholder="name@example.com" required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required="">
                            </div>
                            
                            <div class="form-group">
                                <button name="login_user" class="mt-4 btn btn-primary" type="submit">Login</button>
                            </div>
    
                            <div class="mb-3 text-center">
                                <small class="mb-2 text-center ">Forget your Password <a href="" class="ml-1 link">Reset.</a> </small>
                                <small class="text-center ">Dont have an Account yet? <a href="register.php" class="ml-1 link">Sign up.</a> </small>
                            </div>
                            <div class="text-center">
                                <hr>
                                <small class="text-center ">&copy; Copyright  2022 &nbsp; CoinsCapTrade &nbsp; All Rights Reserved.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
</body>
</html>
