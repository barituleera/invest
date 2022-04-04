<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KEYCOINIFY Options</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('new_home_assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('new_home_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('new_home_assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('new_home_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('new_home_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('new_home_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('new_home_assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('new_home_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('new_home_assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

  <link href="{{asset('new_home_assets/css/style.css')}}" rel="stylesheet">
</head>
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
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{route('welcome')}}">KEYCOINIFY<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{asset('new_home_assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('welcome')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('register')}}" class="get-started-btn scrollto">Register</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 @yield('content')

 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>{{env('APP_NAME')}}<span>.</span></h3>
              <p>
                <!--A108 Adam Street <br>-->
                <!--NY 535022, USA<br><br>-->
                <strong>Phone:</strong> {{env('APP_PHONE')}}<br>
                <strong>Email:</strong> support@keycoinify.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Investment/Crypto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trading</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Asset Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Forex analysis</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <!--<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>-->
            <form action="" method="post" onsubmit="event.preventDefault()">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{env('APP_NAME')}}</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer>




  <!-- End Footer -->

  <div class="mgm" style="display: none;">
    <div class="txt" style="color:black;">Someone from <b></b> just earned <a href="javascript:void(0);"
            onclick="javascript:void(0);"></a>
    </div>
  </div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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
//       (function () {
//   var options = {
//     whatsapp: "+1 (405) 293‑5285",
//     text: "Hello, how may we help you? Just send us a message now to get assistance.",
//     abid: "+1 (405) 293‑5285",// WhatsApp number
//     call_to_action: "Message us", // Call to action
//     position: "left", // Position may be 'right' or 'left'
//   };
//   var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
//   var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
//   s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
//   var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
// })();
  </script>
  <!-- /WhatsHelp.io widget -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61a7043b9099530957f76de1/1flq6h332';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>






  <script src="{{asset('new_home_assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('new_home_assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('new_home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('new_home_assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('new_home_assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('new_home_assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('new_home_assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('new_home_assets/js/main.js')}}"></script>






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
  whatsapp: "+1(430)434-9777",
  text: "Hello, how may we help you? Just send us a message now to get assistance.",
  abid: "+1(430)434-9777",// WhatsApp number
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
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/6228ae431ffac05b1d7dc055/1ftnehf9j';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
