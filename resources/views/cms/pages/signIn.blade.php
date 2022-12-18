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
                    <form action="{{ route('postSignIn') }}" method="post">
                        @csrf
                        <div class="form-group | position-relative">
                            <input type="text" class="form-control p-l-4 {{ $errors->has('email') ? 'has-error' : '' }}" name="email" id="email" placeholder="البريد الإلكتروني">
                            <span class="icon-holder">
                                <img src="{{ asset('assets/images/user.svg') }}" alt="">
                            </span>
                            @if($errors->has('email'))
                                <span class="is-invalid">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group | mt-4 | position-relative">
                            <input type="password" class="form-control p-l-4 {{ $errors->has('password') ? 'has-error' : '' }}" name="password" id="password" placeholder="كلمة المرور">
                            <span class="icon-holder">
                                <img src="{{ asset('assets/images/lock.svg') }}" alt="">
                            </span>
                            @if($errors->has('password'))
                                <span class="is-invalid">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group | d-flex | justify-content-between | mt-4">
                            <input type="checkbox" class="form-check-input">
                            <a href="{{ route('forgotPassword') }}" class="color-blue">نسيت كلمة المرور؟ </a>
                        </div>
                        <div class="form-group | mt-4">
                            <button class="btn blue-colored-btn" type="submit">
                                الدخول
                            </button>
                        </div>

                        <div class="content-divider text-muted form-group">
                            <span>
ليس لديك حساب متجر ؟
                            </span>
                        </div>

                        <div class="form-group | mt-4">
                            <a href="{{ route('signUp') }}" type="button" class="btn blue-bordered">
                                إنشاء متجر جديد
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 | col-sm-12">
                <div class="slider-holder">
                    <div class="slider">
                        <div class="slider-item">
                            <div class="user-icon">
                                <img src="{{ asset('assets/images/circle.svg') }}" alt="logo" class="logo-icon">
                            </div>
                            <div class="quotes-icon | mt-4">
                                <img src="{{ asset('assets/images/quotes.svg') }}" alt="logo" class="logo-icon | mt-3">
                            </div>
                            <div class="login-testimonials">
                                <p>
                                    تجربتي مع معارف كانت ولازالت مثمرة جداً جداً
                                    جداً من نواحي كثيرة ابرزها تسهيل عرض
                                    المنتجات للعملاء معلومات المنتج والشحن
                                    كاملة واضحة للعميل بحيث يطلب العميل دون
                                    سؤال أو تدخل مني كما في منصات التواصل
                                    الإجتماعي
                                </p>
                                <p class="text-bold">
                                    متجر نوماتك
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function () {
           $('.slider').slick({
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
               dots:true
            });
        })
    </script>
@endsection
