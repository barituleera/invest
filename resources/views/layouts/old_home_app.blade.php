<!DOCTYPE html>
<head>
    <meta charset="gb18030">
    <!-- Required meta tags -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0">
    <!--320-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Bitfinex Options is world's leading cryptocurrency online investment and trading platform that offers Bitcoin trading options, provides 24/7 customer support, high level of security, and stable deposits and withdrawals.">
    <meta name="keywords"
        content="Cryptocurrency Trade, Bitcoin Investment, Bitcoin Trading Platform, Binary Trading Platform, Digital Options Trading, BTC">
    <meta name="author" content="Bitfinex Options">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link to stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/style_preloader.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- including script for sweet.js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <!-- scripy for cycle -->
    <script src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript">
        $(window).on('load', function () {
      $('.preloader').addClass('complete');
    });
    </script>

    <!-- favicon -->
    <link href="images/favicon.png" rel="icon" type="image/x-icon">
    <style type="text/css">
        .goog-te-gadget .goog-te-combo {
            margin: 4px 10px 4px 0px !important;
            padding: 7px;
            border-radius: 5px;
        }

        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            right: 50px;
            background: #00FFE2;
            padding: 20px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #03a84e;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #03a84e;
        }
    </style>
</head>
<!-- header -->

<body>
    <!-- this is the preloader section  -->
    <div class="preloader">
        <div class="mt-5 mr-auto loader d-flex justify-content-center align-items-center">
            <center>
                <img src="/images/prelokljsklsjslsjfdldfsader.gif">
            </center>
        </div>
    </div>
    <!-- preloader section ends here -->
    <!-- main body wrapper design starts here  -->
    <section class="wrapper container-fluid">
        <!-- ----------------------First section with the animination main-bg--------------------------- -->
        <section>
            <section class="loss-gain">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div> -->
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async="">
                        {
                "symbols": [
                  {
                    "title": "S&P 500",
                    "proName": "OANDA:SPX500USD"
                  },
                  {
                    "title": "Nasdaq 100",
                    "proName": "OANDA:NAS100USD"
                  },
                  {
                    "title": "EUR/USD",
                    "proName": "FX_IDC:EURUSD"
                  },
                  {
                    "title": "BTC/USD",
                    "proName": "BITSTAMP:BTCUSD"
                  },
                  {
                    "title": "ETH/USD",
                    "proName": "BITSTAMP:ETHUSD"
                  }
                ],
                  "colorTheme": "light",
                    "isTransparent": false,
                      "displayMode": "adaptive",
                        "locale": "en"
              }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </section>
            <!-- Start of the first nav -->
            <div class="container-fluid col-f-nav">
                <div class="container clearfix">
                    <div class="float-left pt-2">
                    </div>
                    <div class="float-right">
                        <div id="google_translate_element"></div>
                    </div>
                </div>
            </div>
            <!-- end of the first nav -->
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href=""><b>Bitfinex Options</b></a>
                    <div class="bt-live-price">
                        <div class="live">
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('login')}}">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('register')}}">REGISTER</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
            <!-- this is the design of the slider  -->
            @yield('content')
            <!-- footer -->
            <!-- this is the begining of the footer section  -->
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <!-- =========Frist column -->
                        <div class="col-md-4 col-sm-12">
                            <!-- this div will contain the image on top of the footer section  -->
                            <div class="footer-ribbon">
                                <img src="images/footer-ribbon.png" alt="footer ribbon">
                            </div>
                            <br>
                            <p> Are you looking for a stable, reliable, guaranteed weekly income? Bitfinex Options offers a
                                range of
                                options to make the most off your investment. Get involved to discover the power of
                                trading.
                            </p>
                        </div> <!-- end the column -->
                        <!-- ====Second column===== -->
                        <div class="col-md-4 col-sm-12 footer-link">
                            <h5> <b> Quick Links</b></h5>
                            <ul class="footer-list">
                                <li> <i class="fas fa-arrow-alt-circle-right col-icon"></i> <a href="{{url('login')}}"> Login
                                    </a> </li>
                                <!-- <li> <i class="fas fa-arrow-alt-circle-right col-icon"></i> <a href=""> Regulation and License </a> </li> -->
                                <li> <i class="fas fa-arrow-alt-circle-right col-icon"></i> <a href="{{url('register')}}">
                                        Sign-up </a>
                                </li>
                            </ul>
                        </div>
                        <!-- This is the Thrid column -->
                        <div class="col-md-4 col-sm-12">
                            <h5> <b> Contact Information</b></h5>
                            <ul class="footer-list">
                                <li><i class="fas fa-envelope col-icon"></i> &nbsp; &nbsp;
                                    <a>support@bitfinexoptions.com</a>
                                </li>
                                <li><i class="fab fa-whatsapp col-icon"></i> &nbsp; &nbsp;
                                    <a>+1 (405) 293‑5285</a>
                                </li>
                            </ul>
                            <div class="eng-read-more">
                                <center>
                                    <a href="{{url('register')}}">Sign up &nbsp; <i class="fas fa-arrow-right dark-gold"></i></a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container row -->
            </footer>
            <!-- body section ends here  -->
            <div class="mgm" style="display: none;">
                <div class="txt" style="color:black;">Someone from <b></b> just earned <a href="javascript:void(0);"
                        onclick="javascript:void(0);"></a></div>
            </div>
        </section> <!-- This is the end of the wrapper section -->
    </section>
    <!-- scripts for particles -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- <script type="text/javascript" src="js/slick.min.js"></script> -->
    <!-- this is the code for the customize slick slider -->
    <script type="text/javascript" src="js/custom_slick.js"> </script>
    <script type="text/javascript" src="js/range-custom.js"> </script>
    <!-- this is for the counter  -->
    <script type="text/javascript" src="js/counter.js"> </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script>
        function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        { pageLanguage: 'en' },
        'google_translate_element'
      );

      if (typeof (document.querySelector) == 'function') {
        document.querySelector('.goog-logo-link').setAttribute('style', 'display: none');
        document.querySelector('.goog-te-gadget').setAttribute('style', 'font-size: 0');
      }
      // If you have jQuery - works cross-browser - uncomment this
      jQuery('.goog-logo-link').css('display', 'none');
      jQuery('.goog-te-gadget').css('font-size', '0');
    }
    </script>
    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script> -->
    <script type="text/javascript">
        var listCountries = ['Argentina', 'USA', 'Germany', 'France', 'Italy', 'South Korea', 'Australia', 'Norway', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'Spain', 'Austria', 'Venezuela', 'South Africa', 'Sweden', 'South Korea', 'China', 'Italy', 'Germany', 'United Kingdom', 'Bahrain', 'Greece', 'Cuba', 'Bulgaria', 'Portugal', 'Austria', 'Cyprus', 'Panama', 'Asia', 'Norway', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus', 'Spain', 'Norway'];
    var listPlans = ['$2000', '$1000', '$50000', '$15000', '$10000', '$100000', '$20000', '$1500', '$30000', '$40000', '$1200', '$60000', '$3400', '$7000', '$25000', '$25000', '$35000', '$5000', '$7000', '$45000', '$3500', '$5000', '$12500', '$9500'];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
      clearInterval(run);
      interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
      var country = listCountries[Math.floor(Math.random() * listCountries.length)];
      var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
      var msg = 'Someone from <b>' + country + '</b> just earned  <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
      $(".mgm .txt").html(msg);
      $(".mgm").stop(true).fadeIn(300);
      window.setTimeout(function () {
        $(".mgm").stop(true).fadeOut(300);
      }, 6000);
      run = setInterval(request, interval);
    }

    $("#inquiry-form").submit(function (e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
        type: "post",
        url: form.attr("action"),
        data: form.serialize(),
        beforeSend: function () {
          $("#inquiry-btn").html('<i class="fas fa-spinner fa-spin"></i> Sending Message');
        },
        success: function (response) {
          $("#inquiry-btn").html('Submit');
          if (response) {
            swal({
              title: "Message Sent!",
              text: response,
              icon: "success"
            });
            form.trigger("reset");
          } else {
            swal({
              title: "Error!",
              text: response,
              icon: "error"
            });
          }
        },
        error: function () {
          $("#inquiry-btn").html('Submit');
          alert("Please check your internet connection");
        }
      });
    });

    $("#contact-form").submit(function (e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
        type: "post",
        url: form.attr("action"),
        data: form.serialize(),
        beforeSend: function () {
          $("#contact-btn").html('<i class="fas fa-spinner fa-spin"></i> Sending Message');
        },
        success: function (response) {
          $("#contact-btn").html('<i class="fas fa-rocket"></i> Send Message');
          if (response) {
            swal({
              title: "Message Sent!",
              text: response,
              icon: "success"
            });
            form.trigger("reset");
          } else {
            swal({
              title: "Error!",
              text: response,
              icon: "error"
            });
          }
        },
        error: function () {
          $("#contact-btn").html('<i class="fas fa-rocket"></i> Send Message');
          alert("Please check your internet connection");
        }
      });
    });
    </script>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
    var options = {
      whatsapp: "+1 (405) 293‑5285",
      text: "Hello, how may we help you? Just send us a message now to get assistance.",
      abid: "+1 (405) 293‑5285",// WhatsApp number
      call_to_action: "Message us", // Call to action
      position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
    </script>
    <!-- /WhatsHelp.io widget -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">

</script>
<!--End of Tawk.to Script-->
</body>

</html>
