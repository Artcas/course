@extends('cms.layout.auth-layout')

@section('title', 'Sign Up')

@section('content')
        <img src="{{ asset('assets/images/signupbg.svg') }}" alt="" class="abs-signup-bg">
        <div class="container | signup-section | mt-20">
            <div class="row">
                <div class="col-lg-9 | col-sm-12 | m-auto">
                    <div class="row">
                        <div class="col-lg-6 | m-auto | col-sm-12">
                            <div class="signup-logo-content-holder">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" class="logo-icon">
                                <h2 class="signup-blue-title | mt-5">
                                    سهلنا
                                </h2>
                                <h2 class="signup-blue-title">
                                    تواجدك الرقمي
                                </h2>
                                <p class="color-grey | d-small-none | mt-4 | f-22">منصة معارف تسهل عليك من إنشاء منـصــتـك الــرقــمــيــة <
                                خلال دقائق وإدارة منصتك بكل سهولة وفاعلية، لتقديم <
                                دوراتك ومنتجاتك الرقمية بأعلـى جـــودة واذكــى الادوات  <
                                 التي تساهم في نمو عملك<
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 | m-auto | col-sm-12">
                            <form action="{{ route('postSignUp') }}" method="post">
                                @csrf
                                <div class="inputs-holders">
                                    <div class="form-group">
                                        <label for="name" class="control-label">اسم التاجر</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" id="name" placeholder="ادخل اسم التاجر">
                                        @if($errors->has('name'))
                                            <span class="is-invalid">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group | mt-4">
                                        <label for="email" class="control-label">البريد الإلكتروني</label>
                                        <input type="text" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" name="email" id="email" placeholder="ادخل البريد الإلكتروني">
                                        @if($errors->has('email'))
                                            <span class="is-invalid">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group | mt-4">
                                        <label for="phone" class="control-label">رقم الجوال</label>
                                        <input type="text" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}" name="phone" id="phone" placeholder="ادخل رقم الجوال">
                                        @if($errors->has('phone'))
                                            <span class="is-invalid">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group | mt-4">
                                        <label for="password" class="control-label ">كلمة المرور</label>
                                        <input type="password" class="form-control {{ $errors->has('password') ? 'has-error' : '' }}" name="password" id="password" placeholder="ادخل كلمة المرور">
                                        @if($errors->has('password'))
                                            <span class="is-invalid">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group | mt-4 | affility-d-none">
                                        <label for="affilite" class="control-label ">لديك كوبون دعوة ؟</label>
                                        <input type="text" class="form-control {{ $errors->has('affilite') ? 'has-error' : '' }}" name="affilite" id="affilite" placeholder="ادخل رمز الكوبون">

                                        <span class="d-none | is-invalid" id="affilities-error">رمز الكوبون مطلوب</span>

                                        <button type="button" id="ajax-affilite" class="btn affilite-button">
                                            تطبيق
                                        </button>
                                    </div>
                                    <div class="form-group | mt-5 | text-center">
                                        <p class="signup-blue-text" id="toggle-affilite">
                                            لديك كوبون دعوة؟
                                        </p>
                                        <button type="submit" class="btn blue-colored-btn">تسجيل</button>
                                        <p class="mt-5">
                                            <span class="color-grey">
                                                بالتسجيل فأنا أوافق على
                                            </span>
                                            <a class="color-blue">
                                                سياسات منصة معارف
                                            </a>
                                        </p>
                                        <p class="color-grey | mt-5">
                                            لديك حساب متجر ؟
                                        </p>
                                        <a href="{{ route('signIn') }}" type="button" class="btn blue-bordered">
                                            تسجيل الدخول
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
        <script>
            $(document).ready(function (){
                $('#toggle-affilite').click(function (){
                    $('.affility-d-none').show();
                    $(this).hide();
                })

                $('#ajax-affilite').click(function () {
                    if($('#affilite').val() === ''){
                        $('#affilite').addClass('has-error');
                        $('#affilities-error').removeClass('d-none');
                    }
                })
            })
        </script>
    @endsection
    </body>
</html>

