@extends('layouts.home_app')
@section('content')
<div class="single-item">
    <div class="slider-img1">
        <h1 class="slide-h1"> RELIABLE, SIMPLE AND INNOVATIVE</h1>
        <a href="{{url('register')}}">

            <div class="create-acc">
                <p> Create a Trading Account </p>
            </div>
        </a>
    </div>

<section class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <br>
                <br>
                <center>
                    <div class="big">
                        <img src="images/trusted-icon.png">
                    </div>
                </center>
                <div style="padding: 20px; "></div>
                <h4> <b> Trusted Company</b> </h4>
                <br>
                <p class="text-center"> <i class="fas fa-check"></i> Trusted by thousand of<br> people all
                    over the world.
                    Good <br>reviews on all social channels</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <br>
                <br>
                <center>
                    <div class="big">
                        <img src="images/secured-icon.png">
                    </div>
                </center>
                <div style="padding: 20px; "></div>
                <h4> <b> Secured</b> </h4>
                <br>
                <p class="text-center"> <i class="fas fa-check"></i> Secured blockchain <br>transactions,
                    Secured
                    investors <br>data and personal information.<br> Top level ssl certification.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <br>
                <br>
                <center>
                    <div class="big">
                        <img src="images/privacy-icon.png">
                    </div>
                </center>
                <div style="padding: 20px; "></div>
                <h4> <b> Privacy</b> </h4>
                <br>
                <p class="text-center"> <i class="fas fa-check"></i> All private information remains
                    <br>private.
                    {{env('APP_NAME')}} never shares <br>Private information to any third <br>party</p>
            </div>
        </div>
    </div> <!-- end  row-->
</section>
<div style="padding: 20px; "></div>
<!--  this is the about us section page  -->
<section class="container-fluid abt-body">
    <div class="container">
        <h2> ABOUT US </h2>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="abt-txt">
                    {{env('APP_NAME')}} is a group of investors, traders, analyst and brokers, with valuable
                    experience in the
                    sphere of forex and {{env('APP_NAME')}} dedicated their time to research development.

                    Anyone all over the world can become an investor. We provide investment vehicles to
                    investors of all
                    sizes interested in being part of the revolutionary forex,binary option, crypto-currency
                    and bitcoin
                    mining world.
                </p>
                <div class="eng-read-more" data-toggle="modal" data-target="#exampleModal">
                    <center>
                        Read More &nbsp; <i class="fas fa-arrow-right dark-gold"></i>
                    </center>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{env('APP_NAME')}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="images/modal1.jpg" class="img-thumbnail">
                                </center>
                                <br>
                                <p style="text-align: center;">
                                    {{env('APP_NAME')}} is a group of Bitcoin Miners, traders, analyst and
                                    brokers, with valuable
                                    experience in the sphere of forex and crypto dedicated their time to
                                    research development.

                                    Anyone all over the world can become an investor. We provide investment
                                    vehicles to investors of
                                    all sizes interested in being part of the revolutionary forex,binary
                                    option, crypto and bitcoin
                                    mining world.

                                    We have studied the bitcoin marketplace very closely, as well as other
                                    digital currencies, and
                                    we have built bots with AI (artificial intelligence). We have created a
                                    database with all the
                                    trading volume available on digital currencies and which is updated
                                    daily, allowing the software
                                    to spot different patterns in price movement. It uses different
                                    strategies, and they are capable
                                    of adapting to any online trading platform.

                                    Join millions who have already discovered smarter
                                    strategies for investing. Join experienced traders and earn greatly
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end div-->
            <div class="col-md-6 col-sm-12 abt-img">
                <div class="desktop-wrapper">
                    <iframe src="https://www.youtube.com/embed/Gc2en3nHxA4"
                        allow="autoplay; encrypted-media" allowfullscreen="" width="560" height="315"
                        frameborder="0"></iframe>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div style="padding: 20px"></div>
</section>
<!-- end the about us section  -->

<!-- this is the section that has the embeded video  -->
<div style="padding: 20px;"></div>
<!-- This is the section that contain the trading widget  -->
<!-- ======================================================this is the count tis section ========================================= -->
<section class="container-fluid col-testimony">
    <!-- ==========================================this is the Payment Methods section=========================================== -->
    <div class="container col-pay-meth">
        <h3 class="text-center text-light"> Payment Methods </h3>
        <p class="text-center text-light"> Payment Methods for Deposit and withdrawal </p>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="images/ethereum.png">
            </div> <!-- end colunm -->
            <div class="col-md-6 col-sm-6">
                <img src="images/bitcoin.png">
            </div>
            <!-- =============================== The payment methods section ends here --- ============================-->
        </div> <!-- end row-->
    </div><!-- end container -->
    <!--==================== the coutis section starts here ========================= -->
</section>
<!-- =========================this is the testimony section ========================== -->
@endsection
