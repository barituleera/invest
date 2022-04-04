@extends('layouts.app')

@section('content')
<section class="container-fluid col-plan-bg d-none">
    <div id="particles-js"></div>
    <div class="container-fluid">
        <div class="row" style="padding: 20px;">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="col-plan-inner">
                    <div class="col-plan-head">
                        <div style="padding: 10px;"> </div>
                        <h2> KILO </h2>
                    </div>
                    <p class="plan-text"><span class="green"> </span><b>$200</b> </p>
                    <p class="plan-text"><span class="green"> </span> BITCOIN MINING / TRADING </p>
                    <p class="plan-text"> <span class="green"> BONUS </span> 5% </p>
                    <!-- those values ontop of the .... -->
                    <!-- those values ontop of the .... -->
                    <div class="clearfix"></div>
                    <!-- ============this is the range slider========================= -->
                    <div class="container" style="padding:0 30px;">
                        <br>
                        <!-- </form> -->
                        <!-- ===============this is the end of the range====================== -->
                    </div>
                    <!-- <form> -->
                    <br>
                    <!-- those values ontop of the .... -->
                    <!-- this is a break -->
                    <div class="clearfix"></div>
                    <a href="{{url('register')}}">
                        <div class="plan-signup">
                            <center>
                                Sign up &nbsp; <i class="fas fa-user dark-gold"></i>
                            </center>
                        </div>
                    </a>
                </div>
            </div> <!-- end the col -->
            <!-- =============================================================line break===================================================== -->
            <div class="col-md-3 col-sm-12">
                <div class="col-plan-inner">
                    <div class="col-plan-head">
                        <div style="padding: 10px;"> </div>
                        <h2> MEGA </h2>
                    </div>
                    <p class="plan-text"><span class="green"> </span> $500 </p>
                    <p class="plan-text"><span class="green"></span> BITCOIN MINING / TRADING </p>
                    <p class="plan-text"> <span class="green"> BONUS </span> 10% </p>
                    <!-- those values ontop of the .... -->
                    <!-- ============this is the range slider========================= -->
                    <div class="container" style="padding:0 30px;">
                        <!-- </form> -->
                        <!-- ===============this is the end of the range====================== -->
                    </div>
                    <!-- <form> -->
                    <br>
                    <!-- those values ontop of the .... -->
                    <div class="clearfix"></div>
                    <a href="{{url('register')}}">
                        <div class="plan-signup">
                            <center>
                                Sign up &nbsp; <i class="fas fa-user dark-gold"></i>
                            </center>
                        </div>
                    </a>
                </div>
            </div> <!-- end the col -->
            <!-- =============================================================line break GOLD===================================================== -->
            <div class="col-md-3 col-sm-12">
                <div class="col-plan-inner">
                    <div class="col-plan-head" style="left: 0px; top: 0px">
                        <div style="padding: 10px;"> </div>
                        <h2> GIGA </h2>
                    </div>
                    <p class="plan-text"><span class="green"> </span> $1,000 </p>
                    <p class="plan-text"><span class="green"> </span> BITCOIN MINING / TRADING </p>
                    <p class="plan-text"> <span class="green"> BONUS </span> 15% </p>
                    <!-- those values ontop of the .... -->
                    <!-- this is a break -->
                    <!-- those values ontop of the .... -->
                    <div class="clearfix"></div>
                    <!-- ============this is the range slider========================= -->
                    <div class="container" style="padding:0 30px;">
                        <!-- </form> -->
                        <!-- ===============this is the end of the range====================== -->
                    </div>
                    <!-- <form> -->
                    <br>
                    <!-- those values ontop of the .... -->
                    <div class="clearfix"></div>
                    <a href="{{url('register')}}">
                        <div class="plan-signup">
                            <center>
                                Sign up &nbsp; <i class="fas fa-user dark-gold"></i>
                            </center>
                        </div>
                    </a>
                </div>
            </div> <!-- end the col -->
            <!-- =============================================================line break===================================================== -->
            <div class="col-md-3 col-sm-12">
                <div class="col-plan-inner">
                    <div class="col-plan-head">
                        <div style="padding: 10px;"> </div>
                        <h2> TERA </h2>
                    </div>
                    <p class="plan-text"><span class="green"></span> $5,000 </p>
                    <p class="plan-text"><span class="green"> </span> BITCOIN MINING / TRADING </p>
                    <p class="plan-text"> <span class="green"> BONUS </span> 20% </p>
                    <!-- those values ontop of the .... -->
                    <!-- those values ontop of the .... -->
                    <div class="clearfix"></div>
                    <!-- ============this is the range slider========================= -->
                    <div class="container" style="padding:0 30px;">
                    </div>
                    <br>
                    <!-- those values ontop of the .... -->
                    <div class="clearfix"></div>
                    <a href="{{url('register')}}">
                        <div class="plan-signup">
                            <center>
                                Sign up &nbsp; <i class="fas fa-user dark-gold"></i>
                            </center>
                        </div>
                    </a>
                </div>
            </div> <!-- end the col -->
        </div> <!-- end row -->
    </div> <!-- end innner container -->
</section>
@endsection
