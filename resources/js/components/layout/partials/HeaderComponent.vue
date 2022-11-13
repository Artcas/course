<template>
    <header id="header" class="page-header bg-white box-shadow sticky" data-class="bg-white">
        <div class="navbar navbar-expand-lg">

            <a class="d-lg-none i-con-h-a p-2 pl-3" data-toggle="modal" data-target="#aside">
                <i class="i-con i-con-menu text-muted"></i>
            </a>

            <a href="/" class="navbar-brand">
                <img src="https://cdn.msaaq.com/academies/39927/pb-logo-grey.png" alt="">
            </a>


            <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
                <ul class="navbar-nav _mx-auto" data-nav="">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <span class="nav-text">رئيسية الاكاديمية</span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-menu order-1 order-lg-2">
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-color">
                        <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                            <i class="i-con i-con-plus ml-1"></i>
                            <span class="">اضف جديد</span>
                        </button>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right w _pt-0 mt-3 animate fadeIn">
                        <a href="#" class="dropdown-item">
                            <i class="mr-2 i-con i-con-table"><i></i></i>
                            <span class="">دورة</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="mr-2 i-con i-con-shop ml-1"><i></i></i>
                            <span class="">منتج</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="mr-2 i-con i-con-layer ml-1"></i>
                            <span class="">مجموعة منتجات</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="mr-2 i-con i-con-calendar ml-1"></i>
                            <span class="">جلسة استشارية</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
<span class="mr-2 ml-1">
<img class="i-con" src="https://img.icons8.com/dotty/64/000000/discount-ticket.png">
</span>
                            <span class="">قسيمة</span>
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown mx-3">
                    <div wire:id="FDj8SPWQo5rr0WVx7cbD">
                        <a class="nav-link px-2 i-con-h-a mr-lg-2" data-toggle="dropdown">
                            <i class="i-con i-con-bell"><i></i></i>
                            <span class="badge badge-pill badge-up bg-primary">
0
</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                            <div class="scrollable hover" style="max-height: 250px">
                                <div class="list list-row animates animates-fadeInUp">
                                    <div class="list-item bg-light">
                                        <div>
                                            <a class="text-decoration-none" wire:click="makeAsRead('f799de8f-b93e-438c-be3c-8163ff8b9b36')">
                                                <small class="w-36 avatar circle bg-info-lt">
                                                    <img class="w-36" src="https://www.gravatar.com/avatar/d4b10dd5cf0107e7518990e36d74fad3?s=80&amp;d=mm&amp;r=g" alt=".">
                                                </small>
                                            </a>
                                        </div>
                                        <div class="flex flex-column">
                                            <div class="item-feed h-2x">
                                                <a class="text-decoration-none" wire:click="makeAsRead('f799de8f-b93e-438c-be3c-8163ff8b9b36')">
                                                    لقد التحقت في دورة:
                                                    ملخص كفاح للقدرات
                                                </a>
                                            </div>
                                            <div class="pt-2">
                                                <i class="fa fa-clock ml-2 text-dark" aria-hidden="true"></i>
                                                منذ شهرين
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex px-3 py-2 b-t">
                                <div class="flex">
                                    <span>0 الأشعارات </span>
                                </div>
                                <a class="text-decoration-none" href="https://yzin.msaaq.net/admin/notifications">
                                    كل الأشعارات
                                    <i class="fa fa-angle-right text-muted"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-color">
                        <div class=" mx-2 d-none l-h-1x d-lg-block text-right">
                            <small class="text-fade d-block mb-1">مرحباً</small>
                            <span>يزن</span>
                        </div>
                        <div class="avatar">
                            <img src="https://www.gravatar.com/avatar/d4b10dd5cf0107e7518990e36d74fad3?s=80&amp;d=mm&amp;r=g" alt="">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right w _pt-0 mt-3 animate fadeIn">
                        <a class="dropdown-item" href="https://yzin.msaaq.net/account">
                            <span>تعديل الحساب</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank" href="http://help.msaaq.com/">
                            مركز المساعدة
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="$('#logout-form').submit()" style="cursor: pointer;">
                            تسجيل الخروج
                        </a>
                        <form action="https://yzin.msaaq.net/logout" method="post" class="d-none" id="logout-form"><input type="hidden" name="_token" value="F5pcG4e17U9h7SUu2TRer0qCK6OscSDV4u5kas1r"></form>
                    </div>
                </li>

                <li class="nav-item d-lg-none">
                    <a href="#" class="nav-link i-con-h-a px-1" data-toggle="collapse" data-toggle-class="" data-target="#navbarToggler">
                        <i class="i-con i-con-nav text-muted"><i></i></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
</template>

<script>
    export default {

    }
</script>
