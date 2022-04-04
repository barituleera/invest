@extends('layouts.auth_app')
@section('auth_content')
<div class="content">
    <div class="page-inner">
        <div class="mt-2 mb-5">
            <h1 class="title1 text-dark">Change Your password</h1> <br> <br>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12 offset-lg-2 card p-4 shadow-lg">
                <div class="row">
                    <div class="col-12">
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
                            <h3 class="text-danger">{{ session()->get('failed') }}</h3>
                        </div>
                        @endif

                    </div>
                </div>
                <form method="post" action="{{route('users.updatepass')}}">
                    @csrf
                    <div class="form-group mb-2">
                        <label class="text-dark">Old Password</label>
                        <input type="password" name="old_password"
                            class="form-control text-dark" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-dark">New Password</label>
                        <input type="password" name="password" class="form-control text-dark"
                            required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-dark">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control text-dark" required>
                    </div> <br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
