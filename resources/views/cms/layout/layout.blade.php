<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="description" value="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_title')">
    <meta name="author" content="Artyom Petrosyan">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://kit.fontawesome.com/6b0370da9a.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
<div class="page-wrapper | container-fluid">
    <header>
        <img src="{{ asset('assets/images/header_shape.svg') }}" alt="" class="header-background">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-lg-2 | text-center">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-8 | text-center">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">خدماتنا </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">الأسعار </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">من نحن </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 | hide-mobile">
                    <a href="{{ route('signUp') }}" class="btn btn-custom">انشئ منصتك مجاناً</a>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <img src="{{ asset('assets/images/footer_shape.svg') }}" alt="" class="footer-background">
        <div class="row">
            <div class="col-lg-4 | col-sm-12 | text-center">
                <img src="{{ asset('assets/images/logo.svg') }}" style="margin-top: 65px" alt="Logo">
            </div>
            <div class="col-lg-4 | col-sm-12 | text-center">
                <p class="text-bold">عن معارف</p>
                <p class="social-box-title | mb-0">سياسة الخصوصية</p>
                <p class="social-box-title | mb-0">اتفاقية الاستخدام</p>
                <p class="social-box-title | mb-0">انضم لفريق معارف</p>
            </div>
            <div class="col-lg-4 | col-sm-12 | text-center">
                <div class="social-box">
                    <span class="social-box-title">تابعونا على </span>
                    <div class="icon-holder | d-flex">
                        <div class="icon-item">
                            <a href="">
                                <img src="{{ asset('assets/images/instagram.svg') }}" alt="">
                            </a>
                        </div>

                        <div class="icon-item">
                            <a href="">
                                <img src="{{ asset('assets/images/youtube.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="icon-item">
                            <a href="">
                                <img src="{{ asset('assets/images/twitter.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="icon-item">
                            <a href="">
                                <img src="{{ asset('assets/images/drible.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <span class="social-box-title | d-block | mt-4">جميع الحقوق محفوظة</span>
                    <span class="social-box-title">لشركة معارف©2022 </span>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('assets/js/slider.js') }}"></script>
</body>
</html>
