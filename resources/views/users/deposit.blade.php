@extends('layouts.auth_app')
@section('auth_content')
<div class="outer-w3-agile col-xl">

    <div class="row">
        <div class="col-12">
            <div class="input- mg-b-pro-edt ">

                <h3 class="text-primary">Payment procedure</h3>

                
                @if(Auth::user()->mine == 'yes')
                
                    <h6 class="text-dark">BTC: 3NE2Wzta6UJE1CszKXjd3AbPXmqCEwM8nR</h6>
                    <h6 class="text-dark">ETH: 0xd25140a4a8769573e256B96b5536Add0757Efc3f</h6>
                    <h6 class="text-dark">LTC: MGwHsuCSrfVLNuLdYBifP7zYR6KeaZNRVv</h6>
                
                @else
                    
                @foreach ($wallets as $wallet)
                    <h6 style="color:;" >{{$wallet->name}}: {{$wallet->wallet_address}}</h6>
                @endforeach
                
                
                
                
                @endif
                
                
                
                
                {{--  <h6 class="text-dark">BTC: 1L1zo8Eir9UL1C6jXZgm5NEpv92vF7oPtj</h6>
                <h6 class="text-dark">ETH: 0x9A57F05f804Ba3af978BdE0bB382C4B9CF51bEB6</h6>
                <!--<h6 class="text-dark">LTC: MSHAv9e1W45CoUaHEEwrMhZ37Adu7nPJU4</h6>-->  --}}
                <ul class="text-info mt-4">
                    <li><i class="fa fa-dot-circle-o"></i> All payment should be made into any of above addresses</li>
                    <li><i class="fa fa-dot-circle-o"></i> After payment, kindly paste the transaction ID for confirmation</li>
                    <li><i class="fa fa-dot-circle-o"></i> After payment confirmation transfer the money from your wallet to your
                        investment</li>
                </ul>


        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 mt-5">
                    <div class="form">
                        <form style="padding:3px;" role="form" method="post" action="{{route('users.depositing')}}">
                            @csrf
                            <input style="padding:5px;" class="form-control" placeholder="Enter amount here" type="text" name="amount"><br />
                            <input style="padding:5px;" class="form-control" placeholder="Enter blockchain transaction id here" type="text" name="trans_id"><br />
                            <select name="payMethod" class="form-control" id="">
                                <option disabled>Payment method</option>
                                <option value="bitcoin">Bitcoin</option>
                                <option value="Etherium">Etherium</option>
                                <!--<option value="litcoin">Litcoin</option>-->
                            </select> <br>
                            <input type="submit" class="btn btn-primary" value="Continue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
