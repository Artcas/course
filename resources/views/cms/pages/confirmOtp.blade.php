@extends('cms.layout.auth-layout')

@section('title', 'Log in')

@section('content')
    <img src="{{ asset('assets/images/login.svg') }}" alt="" class="abs-signin-bg">
    <div class="container">
        <div class="row | mt-5">
            <div class="col-lg-6 | col-sm-12">
                <div class="logo-holder">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" class="logo-icon">
                </div>
                <div class="panel panel-body login-form">
                    <form action="{{ route('postConfirmOtp') }}" method="post">
                        @csrf
                        <div class="form-group | position-relative">
                            <input type="text" class="form-control p-l-4 {{ $errors->has('email') ? 'has-error' : '' }}" name="otp-code" id="otp-code" placeholder="Otp Code">
                            @if($errors->has('otp-code'))
                                <span class="is-invalid">{{ $errors->first('otp-code') }}</span>
                            @endif
                        </div>
                        <div class="form-group | mt-4">
                            <button class="btn blue-colored-btn" type="submit">
                                Confirm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 | col-sm-12">

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
