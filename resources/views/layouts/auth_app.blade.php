<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta Tags -->
    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="/auth_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="/auth_assets/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="/auth_assets/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="/auth_assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="/auth_assets/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="/auth_assets/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->
    <script src="https://use.fontawesome.com/403aedd573.js"></script>
    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h5>
                    <a href="../" class="text-warning">{{env('APP_NAME')}}</a>
                </h5>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="../dashboard/">
                        <i class="fa fa-th"></i>
                        Dashboard
                    </a>
                </li>

                @if(Auth::user()->role == 1)
                <li>
                    <a href="{{route('users.deposit')}}">
                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        Deposit
                    </a>
                </li>

                <li>
                    <a href="{{route('users.withdrawal')}}">
                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        Withdraw
                    </a>
                </li>

                <li>
                    <a href="{{route('users.profile')}}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="{{route('users.changepassword')}}">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        Change password
                    </a>
                </li>
                {{-- <li>
                    <a href="{{route('users.transactions')}}">
                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        Transaction History
                    </a>
                </li> --}}
                @endif


                <li>
                    <a href="#" onclick="logout()">
                        <i class="fa fa-sign-out"></i>
                        Logout
                    </a>
                    <form method="POST" action="{{route('logout')}}" id="logoutform">@csrf</form>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>

                    Hello, {{Auth::user()->first_name .' '. Auth::user()->last_name}}
                    <ul class="top-icons-agileits-w3layouts float-right">


                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    @yield('auth_content')
                </div>


            </div>
        </div>
         <!-- Copyright -->
    {{-- <div class="container-fluid copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
        <p>© 2010 {{env('APP_NAME')}} . All Rights Reserved </a>
        </p>
    </div> --}}
</div>






    <!-- Required common Js -->
    <script src='/auth_assets/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="/auth_assets/js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });

    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="/auth_assets/js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random"
            , title: "Thursday"
            , values: [{
                    X: "6"
                    , Y: 300.00
                }
                , {
                    X: "7"
                    , Y: 101.98
                }
                , {
                    X: "8"
                    , Y: 140.00
                }
                , {
                    X: "9"
                    , Y: 340.00
                }
                , {
                    X: "10"
                    , Y: 470.25
                }
                , {
                    X: "11"
                    , Y: 180.56
                }
                , {
                    X: "12"
                    , Y: 680.57
                }
                , {
                    X: "13"
                    , Y: 740.00
                }
                , {
                    X: "14"
                    , Y: 800.89
                }
                , {
                    X: "15"
                    , Y: 420.57
                }
                , {
                    X: "16"
                    , Y: 980.24
                }
                , {
                    X: "17"
                    , Y: 1080.00
                }
                , {
                    X: "18"
                    , Y: 140.24
                }
                , {
                    X: "19"
                    , Y: 140.58
                }
                , {
                    X: "20"
                    , Y: 110.54
                }
                , {
                    X: "21"
                    , Y: 480.00
                }
                , {
                    X: "22"
                    , Y: 580.00
                }
                , {
                    X: "23"
                    , Y: 340.89
                }
                , {
                    X: "0"
                    , Y: 100.26
                }
                , {
                    X: "1"
                    , Y: 1480.89
                }
                , {
                    X: "2"
                    , Y: 1380.87
                }
                , {
                    X: "3"
                    , Y: 1640.00
                }
                , {
                    X: "4"
                    , Y: 1700.00
                }
            ]
        };
        $(function() {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid"
                , toolwidth: "50"
                , toolheight: "25"
                , axiscolor: "#E6E6E6"
                , textcolor: "#6E6E6E"
                , showlegends: false
                , data: [graphdata4]
                , legendsize: "140"
                , legendposition: 'bottom'
                , xaxislabel: 'Hours'
                , title: 'Weekly Profit'
                , yaxislabel: 'Profit in $'
            });
        });

    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="/auth_assets/js/rumcaJS.js"></script>
    <script src="/auth_assets/js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="/auth_assets/js/moment.min.js"></script>
    <script src="/auth_assets/js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function() {
            $('.calender').pignoseCalender({
                select: function(date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true
                , select: function(date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>

    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="/auth_assets/js/script.js"></script>
    <!--// profile-widget-dropdown js-->



    <!-- pie-chart -->
    <script src='/auth_assets/js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania"
                , value: 260
            }
            , {
                country: "Ireland"
                , value: 201
            }
            , {
                country: "Germany"
                , value: 65
            }
            , {
                country: "Australia"
                , value: 39
            }
            , {
                country: "UK"
                , value: 19
            }
            , {
                country: "Latvia"
                , value: 10
            }
        ];

        AmCharts.ready(function() {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
        const logout = () => {
            document.getElementById('logoutform').submit();
        }

    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                }
                , function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });

    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="/auth_assets/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/61a7043b9099530957f76de1/1flq6h332';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
