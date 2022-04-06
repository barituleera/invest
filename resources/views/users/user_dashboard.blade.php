@extends('layouts.auth_app')
@section('auth_content')

<div class="outer-w3-agile col-12">


    <div class="row">
        <div class="col-md-4 mt-3 mb-3 d-none">
            <div class="card">
                <div class="card-body bg-dark col-12">
                    <p class="text-warning">Balance</p>
                    <h4 class="text-warning">${{ number_format(Auth::user()->wallet->balance) }}.00</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
            <div class="card">
                <div class="card-body bg-dark col-12">
                    <p class="text-warning">Investment</p>
                    <h4 class="text-warning">${{ number_format(Auth::user()->wallet->investment) }}.00</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
            <div class="card">
                <div class="card-body bg-dark col-12">
                    <p class="text-warning">Returns</p>
                    <h4 class="text-warning">${{ number_format(Auth::user()->wallet->profit) }}.00</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mb-3 d-none">
            <div class="card">
                <div class="card-body bg-dark col-12">
                    <p class="text-warning">Bonus</p>
                    <h4 class="text-warning">${{ number_format(Auth::user()->wallet->bonus) }}.00</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
            <div class="card">
                <div class="card-body bg-dark col-12">
                    <p class="text-warning">Referral Bonus</p>
                    <h4 class="text-warning">${{ number_format(Auth::user()->wallet->ref_bonus) }}.00</h4>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h2 style='font-weight:lighter'>Investment Plans</h2>
                </div>
                {{-- <div class="card-header  bg-dark">
                    <p class="text-light">
                        Investment Packages
                    </p>
                </div> --}}
                <div class="card-body">
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                        <table id="UserTable" class="UserTable table table-hover">
                            <thead>
                                <tr>
                                    {{-- <th>SN</th> --}}
                                    <th>Amount</th>
                                    <th>Return on Investment</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <!--<td>$200</td>-->
                                    <!--<td>$4000</td>-->
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$300 </td>
                                    <td>$6000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$400</td>
                                    <td>$8000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$500 </td>
                                    <td>$10,000 </td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$600 </td>
                                    <td>$12,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$700 </td>
                                    <td>$14,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$800 </td>
                                    <td>$16,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$900 </td>
                                    <td>$18,000</td>
                                </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>

                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$1000 </td>
                                    <td>$20,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$1500 </td>
                                    <td>$30,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$2000 </td>
                                    <td>$40,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$2,500 </td>
                                    <td>$50,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$3000 </td>
                                    <td>$60,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$3,500 </td>
                                    <td>$70,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$4000 </td>
                                    <td>$80,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$4,500 </td>
                                    <td>$90,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$5000 </td>
                                    <td>$100,000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>$200</td>
                                    <td>$4000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>1BTC </td>
                                    <td>5BTC </td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>2BTC </td>
                                    <td>10BTC </td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>3BTC </td>
                                    <td>$4000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>15BTC</td>
                                    <td>$4000</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>4BTC </td>
                                    <td>20BTC</td>
                                </tr>
                                <tr>
                                    {{-- <td>1</td> --}}
                                    <td>5BTC </td>
                                    <td>25BTC</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_0087f"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BITSTAMP-BTCUSD/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget({
                "width": "100%"
                , "height": 610
                , "symbol": "BITSTAMP:BTCUSD"
                , "interval": "1"
                , "timezone": "Etc/UTC"
                , "theme": "light"
                , "style": "1"
                , "locale": "en"
                , "toolbar_bg": "#f1f3f6"
                , "enable_publishing": false
                , "allow_symbol_change": true
                , "container_id": "tradingview_0087f"
            });

        </script>
    </div>
    <!-- TradingView Widget END -->

    </br>

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-BTCUSD/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
            {
                "symbol": "COINBASE:BTCUSD"
                , "width": "100%"
                , "height": 220
                , "locale": "en"
                , "dateRange": "12m"
                , "colorTheme": "light"
                , "trendLineColor": "#37a6ef"
                , "underLineColor": "#e3f2fd"
                , "isTransparent": false
                , "autosize": false
                , "largeChartUrl": ""
            }

        </script>
    </div>
    <!-- TradingView Widget END -->

    </br></br>

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
            {
                "width": "100%"
                , "height": 450
                , "symbolsGroups": [{
                        "name": "Indices"
                        , "originalName": "Indices"
                        , "symbols": [{
                                "name": "OANDA:SPX500USD"
                                , "displayName": "S&P 500"
                            }
                            , {
                                "name": "OANDA:NAS100USD"
                                , "displayName": "Nasdaq 100"
                            }
                            , {
                                "name": "FOREXCOM:DJI"
                                , "displayName": "Dow 30"
                            }
                            , {
                                "name": "INDEX:NKY"
                                , "displayName": "Nikkei 225"
                            }
                            , {
                                "name": "INDEX:DEU30"
                                , "displayName": "DAX Index"
                            }
                            , {
                                "name": "OANDA:UK100GBP"
                                , "displayName": "FTSE 100"
                            }
                        ]
                    }
                    , {
                        "name": "Commodities"
                        , "originalName": "Commodities"
                        , "symbols": [{
                                "name": "CME_MINI:ES1!"
                                , "displayName": "E-Mini S&P"
                            }
                            , {
                                "name": "CME:6E1!"
                                , "displayName": "Euro"
                            }
                            , {
                                "name": "COMEX:GC1!"
                                , "displayName": "Gold"
                            }
                            , {
                                "name": "NYMEX:CL1!"
                                , "displayName": "Crude Oil"
                            }
                            , {
                                "name": "NYMEX:NG1!"
                                , "displayName": "Natural Gas"
                            }
                            , {
                                "name": "CBOT:ZC1!"
                                , "displayName": "Corn"
                            }
                        ]
                    }
                    , {
                        "name": "Bonds"
                        , "originalName": "Bonds"
                        , "symbols": [{
                                "name": "CME:GE1!"
                                , "displayName": "Eurodollar"
                            }
                            , {
                                "name": "CBOT:ZB1!"
                                , "displayName": "T-Bond"
                            }
                            , {
                                "name": "CBOT:UB1!"
                                , "displayName": "Ultra T-Bond"
                            }
                            , {
                                "name": "EUREX:FGBL1!"
                                , "displayName": "Euro Bund"
                            }
                            , {
                                "name": "EUREX:FBTP1!"
                                , "displayName": "Euro BTP"
                            }
                            , {
                                "name": "EUREX:FGBM1!"
                                , "displayName": "Euro BOBL"
                            }
                        ]
                    }
                    , {
                        "name": "Forex"
                        , "originalName": "Forex"
                        , "symbols": [{
                                "name": "FX:EURUSD"
                            }
                            , {
                                "name": "FX:GBPUSD"
                            }
                            , {
                                "name": "FX:USDJPY"
                            }
                            , {
                                "name": "FX:USDCHF"
                            }
                            , {
                                "name": "FX:AUDUSD"
                            }
                            , {
                                "name": "FX:USDCAD"
                            }
                        ]
                    }
                ]
                , "locale": "en"
            }

        </script>
    </div>
    <!-- TradingView Widget END -->

</div>


@endsection
