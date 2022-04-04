<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{env('APP_NAME')}} - Secure Cryptocurrency Trading and Investment</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./public/assets/img/favicon.png" rel="icon">
    <link href="./public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="./public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./public/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="./public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./public/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="./public/text/css" href="css/all.css">
    <link rel="stylesheet" href="./public/icofont/icofont.min.css">

    <!-- =======================================================
  * Template Name: Flexor - v2.1.1
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <!--  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
                , layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }
                , 'google_translate_element'
            );
            /*
                To remove the "powered by google",
                uncomment one of the following code blocks.
                NB: This breaks Google's Attribution Requirements:
                https://developers.google.com/translate/v2/attribution#attribution-and-logos
            */

            // Native (but only works in browsers that support query selector)
            if (typeof(document.querySelector) == 'function') {
                document.querySelector('.goog-logo-link').setAttribute('style', 'display: none');
                document.querySelector('.goog-te-gadget').setAttribute('style', 'font-size: 0');
            }

            // If you have jQuery - works cross-browser - uncomment this
            jQuery('.goog-logo-link').css('display', 'none');
            jQuery('.goog-te-gadget').css('font-size', '0');
        }

    </script>
</head>




<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <ul>
                    <li><i class="icofont-envelope"></i><a href="mailto:support@{{env('APP_NAME')}}.com">support@{{env('APP_NAME')}}.com</a></li>
                    <li><i class="icofont-phone"></i> ++1 (501) 653‑7271 </li>
                </ul>

            </div>
            <div class="cta">
                <a href="{{route('register')}}" class="scrollto">Get Started</a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto d-flex justify-content-between align-items-center">
                <h1 class="text-light">
                    <a href="index.php"><span><img src="./public/assets/img/logo.png" alt="" class="img-fluid logom">
                            <img src="./public/assets/img/logo2.png" alt="" class="img-fluid logom2">
                            <!-- {{env('APP_NAME')}}--></span></a>
                </h1>
                <div class="m-3" id="google_translate_element"></div>

                <style>
                    .logom {
                        display: inline-block;
                    }

                    .logom2 {
                        display: none;
                    }

                    @media (max-width:600px) {
                        .logom {
                            display: none;
                        }

                        .logom2 {
                            display: inline-block;
                        }

                        #header {
                            background: #000;
                        }

                        /*.trv{position:absolute;top:80vh;left:0px;z-index:999999999;width:100% !important}*/
                        .icofont-navigation-menu {
                            color: white !important;
                        }
                    }

                </style>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="./public/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>

                </ul>
            </nav><!-- .nav-menu -->
        </div>

    </header><!-- End Header -->


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container trv">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="index.php" rel="noopener" target="_blank"><span class="blue-text"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD"
                        , "title": "S&P 500"
                    }
                    , {
                        "proName": "FOREXCOM:NSXUSD"
                        , "title": "Nasdaq 100"
                    }
                    , {
                        "proName": "FX_IDC:EURUSD"
                        , "title": "EUR/USD"
                    }
                    , {
                        "proName": "BITSTAMP:BTCUSD"
                        , "title": "BTC/USD"
                    }
                    , {
                        "proName": "BITSTAMP:ETHUSD"
                        , "title": "ETH/USD"
                    }
                ]
                , "colorTheme": "dark"
                , "isTransparent": false
                , "displayMode": "adaptive"
                , "locale": "en"
            }

        </script>
    </div>
    <!-- TradingView Widget END -->
    @yield('slider')
    <!-- ======= Hero Section ======= -->

    </section>
    <!-- End Hero -->
    <script type="text/javascript">
        var xx = 0;

        function rcy() {
            xx++;
            if (xx == 6) {
                xx = 1;
            }

            if (xx == 1) {
                document.getElementById("hero").style.backgroundImage = "url(./public/bgg8.jpg)";
            }
            if (xx == 2) {
                document.getElementById("hero").style.backgroundImage = "url(./public/bgg2.jpg)";
            }

            if (xx == 3) {
                document.getElementById("hero").style.backgroundImage = "url(./public/bgg3.jpg)";
            }

            if (xx == 4) {
                document.getElementById("hero").style.backgroundImage = "url(./public/bgg1.jpg)";
            }

            if (xx == 5) {
                document.getElementById("hero").style.backgroundImage = "url(./public/bg9.gif)";
            }

        }
        setInterval(rcy, 5000);

    </script>

    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        .alert.success {
            background-color: #04AA6D;
            font-size: 13px;
            width: 60%;
        }

        .alert.info {
            background-color: #2196F3;
            font-size: 13px;
            width: 60%;
        }

        .sucani {
            animation-name: sd;
            animation-duration: 4s;
        }

        @keyframes sd {
            from {
                transform: scale(0.8);
            }

            to {
                transform: scale(1);
            }
        }

        @media (max-width:600px) {
            .alert.success {
                background-color: #04AA6D;
                font-size: 13px;
                width: 70%;
            }

            .alert.info {
                background-color: #2196F3;
                font-size: 13px;
                width: 70%;
            }
        }

    </style>

    <script type="text/javascript">
        var xxw = 0;

        function rcyw() {
            xxw++;
            if (xxw == 11) {
                xxw = 1;
            }

            if (xxw == 1) {
                $(".posi").html('<div class="alert success sucani"><span class="closebtn">&times;</span> <strong>Allison Water!</strong> Withdraw $4000 from Bitcoin profit Investment. <b>USA</b></div>');
            }
            if (xxw == 2) {
                $(".posi").html('<div class="alert info sucani"><span class="closebtn">&times;</span> <strong>Cater Wayne!</strong> has just earned $200 Daily Profit from Bitcoin Investment. <b>ENG</b></div>');
            }

            if (xxw == 3) {
                $(".posi").html('<div class="alert success sucani"><span class="closebtn">&times;</span> <strong>Thorgan Denilson !</strong> Withdraw $1600 from Bitcoin profit Investment. <b>BEL</b></div>');
            }

            if (xxw == 4) {
                $(".posi").html('<div class="alert success sucani"><span class="closebtn">&times;</span> <strong>Oliver Dwayne!</strong> Withdraw $12000 from Bitcoin profit Investment. <b>USA</b></div>');
            }

            if (xxw == 5) {
                $(".posi").html('<div class="alert info sucani"><span class="closebtn">&times;</span> <strong>Michelle Stracy!</strong> has just earned $600 Daily Profit from Bitcoin Investment. <b>USA</b></div>');
            }

            if (xxw == 6) {
                $(".posi").html('<div class="alert success sucani"><span class="closebtn">&times;</span> <strong>Jenny Roonie!</strong> Withdraw $2000 from Bitcoin profit Investment. <b>USA</b></div>');
            }
            if (xxw == 7) {
                $(".posi").html('<div class="alert info sucani"><span class="closebtn">&times;</span> <strong>Montes Ryan!</strong> has just earned $500 Daily Profit from Bitcoin Investment. <b>ENG</b></div>');
            }

            if (xxw == 8) {
                $(".posi").html('<div class="alert success sucani"><span class="closebtn">&times;</span> <strong>Shurry Ivenish !</strong> Withdraw $1600 from Bitcoin profit Investment. <b>Ser</b></div>');
            }

            if (xxw == 9) {
                $(".posi").html('<div class="alert success sucani"><span class="closebtn">&times;</span> <strong>Elena Scott!</strong> Withdraw $730.34 from Bitcoin profit Investment. <b>USA</b></div>');
            }

            if (xxw == 10) {
                $(".posi").html('<div class="alert info sucani"><span class="closebtn">&times;</span> <strong>Kate Emigo!</strong> has just earned $840 Daily Profit from Bitcoin Investment. <b>USA</b></div>');
            }

        }
        setInterval(rcyw, 5000);

    </script>
    <br>
    <br>
    <br>

    @yield('public_section')



    <!-- End #main -->
    <style>
        .footer-top {
            background: #161A28 !important;
        }

        footer {
            background: #161A28 !important;
        }

        .footer-contact p {
            color: #fff !important;
        }

        .footer-contact h3 {
            color: #fff !important;
        }

        .footer-contact li {
            color: #fff !important;
        }

        .footer-links h4 {
            color: #fff !important;
        }

        .footer-links a:link {
            color: #fff !important;
        }

        .footer-links a:visited {
            color: #fff !important;
        }


        .footer-newsletter h4 {
            color: #fff !important;
        }

        .footer-newsletter p {
            color: #fff !important;
        }

        .copyright {
            color: #fff !important;
        }

    </style>
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>{{env('APP_NAME')}}</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> ++1 (501) 653‑7271<br>
                            <strong>Email:</strong> support@{{env('APP_NAME')}}.com<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('register')}}">Register</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('login')}}">Login</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Enter your email below to subscribe for our newsletter</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-lg-flex py-4">

            <div class="mr-lg-auto text-center text-lg-left">
                <div class="copyright">
                    &copy; Copyright 2014-2021 <strong><span>{{env('APP_NAME')}}</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="./public/assets/js/copy.js"></script>
    <script src="./public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="./public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="./public/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="./public/assets/vendor/venobox/venobox.min.js"></script>
    <script src="./public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="./public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./public/assets/vendor/aos/aos.js"></script>

    <script src="./public/assets/js/main.js"></script>

    <div style="position:fixed;bottom:100px;right:20px;z-index:500;"><a style="font-size:50px;color:green" href="https://wa.me/447868763668" data-original-title="whatsapp" rel="tooltip" data-placement="left" aria-label="whatsapp">
            <!--<i class="fa fa-whatsapp" style="color:green;font-size:30px"></i>-->
            <img src="./public/live-chat.png" id="walog" />
            <style>
                #walog {
                    width: 60px
                }

                @media (max-width:520px) {
                    #walog {
                        width: 60px
                    }
                }

            </style>
        </a>
    </div>
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
    <style>
        .posi {
            position: fixed;
            bottom: 10px;
            right: 0px;
            z-index: 99999999;
        }

    </style>
    <div class="posi">
    </div>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">

</script>
<!--End of Tawk.to Script-->
</body>

</html>
