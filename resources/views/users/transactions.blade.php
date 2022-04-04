@extends('layouts.auth_app')
@section('auth_content')
<div class="row">
    <div class="col-lg-12">
        {{-- <div class="alert alert-success alert-dismissable"> --}}
            @if(session()->has('success'))
                <div class="alert alert-success">
                    <h3 class="text-success">{{ session()->get('success') }}</h3>
                </div>
            @endif
        {{-- </div> --}}
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <h3 class="text-danger">{{ $error }}</h3>
        </div>
        @endforeach
    </div>
</div>
<div class="outer-w3-agile col-12">
    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
        <table id="UserTable" class="UserTable table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date created</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $dpsn = 1;
                @endphp

                @foreach ($Alltrans as $dtrans)
                <tr>
                    <th scope="row">{{$dpsn++}}</th>
                    <td>${{number_format($dtrans->amount)}}</td>
                    <td>{{$dtrans->type}}</td>
                    <td>{{$dtrans->status}}</td>
                    <td>{{$dtrans->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection
