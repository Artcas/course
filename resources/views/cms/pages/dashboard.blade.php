<html dir="rtl">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{  asset('assets/css/dashboard.css') }}">
        <title>Dashboard</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 | p-0">
                    <div class="sidebar">
                        <div class="logo">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="" width="100%">
                        </div>
                        <div class="sidebar-menu">
                            <div class="sidebar-menu-item | active">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/dashboard/heat.svg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <a href="{{ url('http://'.env('WEBSITE_URL').'/') }}">أكاديمتي</a>
                                </div>
                            </div>
                            <div class="sidebar-menu-item">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/dashboard/credit-card.svg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <a href="#">الإشتراك والفواتير</a>
                                </div>
                            </div>
                            <div class="sidebar-menu-item">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/dashboard/social.svg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <a href="#">التسويق بالعمولة</a>
                                </div>
                            </div>
                            <div class="sidebar-menu-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                                        <image id="Layer_6" data-name="Layer 6" width="32" height="32" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABHNCSVQICAgIfAhkiAAAAwZJREFUWEfNmD1yFEEMhdmQnyMQGqcQknIBMsoO2MgBpBQRJyCiSHHgjABOwQ0onNocA0MIelOjqbb6vW71zAZs1dT+taSv1ZK6W7v9fn9n5euuyX2cZV/O7/cLXZfz5/f2/t2e6zV2disAP5khAJUwWdunNvBrdjDGjQAC7NWI8sbYc/vvdUZXBhBL+TujbMWYeybzpyXXAzwx4S8dw/DGh3kM4gwTwuv5/H7RCYemN1uAP0zxYwEHpW96sy9kPaFUiEhIBfhLzDodO2JiLVBk/ZMoxwAf2aArYoAqWBF3EFEJVzkgAvYSYqsHAacc4HM9tg9LzYyAamlLR22B7MG5nd3yoSjULCmwrCxRSkhk+jN7yuJ9Y99/2oNdxAtzK3SijSWcSg/+DfHkEKrU4P/sjoIdhJUrX04Wk5MXHZBBLG62cZl6OJovZayx2J/+d8AYeyxjDwl5KxHmmUUvIkweAJDRqy1IlQdM6MWcfdD30J639rDCrA4M1IsAjJ5p1TuW5cwbvtzM6OQZEQ9R/zkAY/aqGbIlbsE5A8teJRdXaAgwCo/sLNEJqpbGydzAg7G8qPjLepqtXmVYLHMVEiOA2YkwQBaLZRmTMcsAmSAUbAFk8ik7AIyZowI4O455MFspaAxmDW9Jkqp82CzYnaSaCDxYpbYQHikXpReZXLaUXTLAkUIKkFYtZHAj+k/VVqeMtk42uDj5pam11bXOk1UijhwWsofNzKmGQcY6O20EDsiMl2XgkHA+gQgZvTfFqQOyQupbmYKDgt6dFzCIuc/iZOOQ3QMrFLFB6shfxiji8p09R/Z4v8ahvsELs8tU/DIb9Mjfu9H50mROMCoOs4deemmC0h7kFjiH7kE2r51Q0lqK6uafSVkyRp3MKweo1kf65r8CUOmmBVwBZpo9h2weycNvr/3Wa1pi1mf2oMWLV9l+893kqf2uumSQaXZde4CZxFmxyotIN+kygA6Jhvl/2QIuPYTYROc0s4Mwzw43nrIeZMYc1ncRjCk7/76b4PeRhLpl6x8U6QQKuOzxoQAAAABJRU5ErkJggg=="/>
                                    </svg>
                                </div>
                                <div class="text-holder">
                                    <a href="#">مركز  المساعدة</a>
                                </div>
                            </div>
                            <div class="sidebar-menu-item">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/dashboard/cog.svg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <a href="#">الإعدادات</a>
                                </div>
                            </div>
                        </div>
                        <div class="logout">
                            <div class="sidebar-menu-item">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/dashboard/logout.svg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <a href="{{ route('logout') }}">تسجيل الخروج</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 | p-0 | bg-green">
                    <div class="title-holder">
                        <p class="title">أكاديمتي</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
