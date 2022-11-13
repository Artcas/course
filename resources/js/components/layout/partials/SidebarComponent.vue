<template>
    <div id="aside" class="page-sidenav no-shrink nav-expand _animate _fadeInLeft _fade bg-white sticky" aria-hidden="true" data-class="bg-white">
        <div class="sidenav h-100 modal-dialog bg-white box-shadow">
            <div class="flex scrollable hover">
                <div class="nav-border b-primary" data-nav="">
                    <ul class="nav">
                        <li class="nav-header hidden-folded">
                            <span class="text-muted">yzin</span>
                        </li>
                        <li>
                            <b-link :to="{ name : 'home'}" class="i-con-h-a">
                                <span class="nav-icon">
                                <i class="i-con i-con-home"><i></i></i>
                                </span>
                                <span class="nav-text">الرئيسية</span>
                            </b-link>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="#" class="i-con-h-a">
                                <strong class="nav-icon">
                                    <i class="i-con i-con-users"><i></i></i>
                                </strong>
                                <span class="nav-text">الأعضاء</span>
                                <span class="nav-caret"></span>
                            </a>
                            <ul class="nav-sub">
                                <li class="active">
                                    <b-link :to="{ name : 'students'}">
                                        <span class="nav-text">الطلاب</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'members'}">
                                        <span class="nav-text">الطاقم الإداري</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'membersImport'}">
                                        <span class="nav-text">استيراد</span>
                                    </b-link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="i-con-h-a">
                                <strong class="nav-icon">
                                    <i class="i-con i-con-list"><i></i></i>
                                </strong>
                                <span class="nav-text">الطلبات</span>
                                <span class="nav-caret"></span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <b-link :to="{name: 'orders'}">
                                        <span class="nav-text">الكل</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'ordersPending'}">
                                        <span class="nav-text">بانتظار الموافقة</span>
                                        <span class="text-danger">0</span>
                                    </b-link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="i-con-h-a">
                                <strong class="nav-icon">
                                    <svg class="x-icon w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </strong>
                                <span class="nav-text">المعاملات المالية</span>
                                <span class="nav-caret"></span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <b-link :to="{name: 'payments'}">
                                        <span class="nav-text">الكل</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'paymentsPending'}">
                                        <span class="nav-text">طلبات سحب الأرباح</span>
                                        <span class="text-danger">0</span>
                                    </b-link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-header hidden-folded">
                            <span class="text-muted">الدورات</span>
                        </li>
                        <li>
                            <a href="#" class="i-con-h-a">
                                <strong class="nav-icon">
                                    <i class="i-con i-con-table"><i></i></i>
                                </strong>
                                <span class="nav-text">الدورات</span>
                                <span class="nav-caret"></span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <b-link :to="{name: 'courses'}">
                                        <span class="nav-text">الكل</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'quizzes'}">
                                        <span class="nav-text">الاختبارات</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'categories'}">
                                        <span class="nav-text">التصنيفات</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'difficulties'}">
                                        <span class="nav-text">المستويات</span>
                                    </b-link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <b-link :to="{name: 'assignments'}">
                                <span class="nav-icon">
<i class="i-con i-con-layout"><i></i></i>
</span>
                                <span class="nav-text">
                                    الواجبات
                                </span>
                            </b-link>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-header hidden-folded d-flex align-items-center">
                            <span class="text-muted">المنتجات الرقمية</span>
                        </li>
                        <li>
                            <b-link :to="{name: 'products'}">
                                <span class="nav-icon">
                                <i class="i-con i-con-shop"><i></i></i>
                                </span>
                                <span class="nav-text">المنتجات</span>
                            </b-link>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-header hidden-folded">
                            <span class="text-muted">المدونة</span>
                        </li>
                        <li>
                            <a href="#" class="i-con-h-a">
                                <span class="nav-icon">
                                <i class="i-con i-con-file"><i></i></i>
                                </span>
                                <span class="nav-text">المقالات</span>
                                <span class="nav-caret"></span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <b-link :to="{name: 'articles'}">
                                        <span class="nav-text">الكل</span>
                                    </b-link>
                                </li>
                                <li>
                                    <b-link :to="{name: 'articleCategory'}">
                                        <span class="nav-text">تصنيفات المقالات</span>
                                    </b-link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-header hidden-folded">
                            <span class="text-muted">المجتمع</span>
                        </li>
                        <li>
                            <b-link :to="{name: 'comments'}">
                                <span class="nav-icon">
                                <i class="i-con i-con-comment"><i></i></i>
                                </span>
                                <span class="nav-text">التعليقات</span>
                            </b-link>
                        </li>
                        <li>
                            <b-link :to="{name: 'reviews'}">
                                <span class="nav-icon">
                                <i class="i-con i-con-star"><i><i></i></i></i>
                                </span>
                                <span class="nav-text">التقييمات</span>
                            </b-link>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-header hidden-folded d-flex align-items-center">
                            <span class="text-muted">التسويق</span>
                        </li>
                        <li>
                            <b-link :to="{name: 'coupons'}">
                                <span class="nav-icon">
                                <img class="i-con" src="https://img.icons8.com/dotty/64/000000/discount-ticket.png">
                                </span>
                                <span class="nav-text">القسائم</span>
                            </b-link>
                        </li>
                        <li>
                            <b-link :to="{name: 'affiliates'}">
                                <span class="nav-icon">
                                <i class="i-con i-con-pie-chart"><i></i></i>
                                 </span>
                                <span class="nav-text">التسويق بالعمولة</span>
                            </b-link>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="no-shrink">
                <div class="text-sm p-3 b-t">
                    <div class="hidden-folded text-sm">
                        <div class="my-1 d-none">
                            <a href="#" class="text-muted">الدعم الفني</a>
                            <a href="#" class="text-muted mx-2 no-ajax" target="_blank">التوثيق</a>
                        </div>
                        <div class="text-muted">
                            <small class="text-muted">© 2022، yzin</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {}
</script>
