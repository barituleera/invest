@extends('layouts.auth_app')
@section('auth_content')
<div class="outer-w3-agile col-xl">


    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-lg-3"></div>
            <div class="col-1g-6">
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger mt-3">
                    <p class="text-danger">{{$error}}</p>
                </div>
                @endforeach

                @if(session()->has('success'))
                <div class="alert alert-success">
                    <h3 class="text-success">{{ session()->get('success') }}</h3>
                </div>
                @endif

                @if(session()->has('failed'))
                <div class="alert alert-danger">
                    <p class="text-danger">{{ session()->get('failed') }}</p>
                </div>
                @endif

            </div>
            </div>
{{--
    *121#
    *131*4#
--}}
            <div class="row">
                <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="text-light">Withdrawal</h5>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="form">
                                <form method="POST" action="{{route('users.withdrawal_action')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">amount</label>
                                        <input type="number" name="amount" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <select name="withdrawal_option" id="" class="form-control">
                                            <!--<option value="investment">Investment</option>-->
                                            <option value="profit">Profit</option>
                                            <option value="bonus">Bonus</option>
                                            <!--<option value="Profit">Referal bonus</option>-->
                                            {{-- <option value="Profit">Profit</option>
                                            <option value="Profit">Profit</option> --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Withdraw</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection
