<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">الطاقم الإداري</h2>
            <a href="https://yzin.msaaq.net/admin/members/create" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                    <i class="i-con i-con-plus ml-1"></i>
                    <span class="d-none d-md-inline"> إضافة عضو إداري</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <form method="get" class="d-flex flex-column flex-md-row align-items-center">
                <div class="d-flex w-100 mt-auto">
                    <div class="form-group mb-4 form-group-verified w-100 mt-auto">
                        <label class="text-dark" for="verified">
                            <span dir="auto">البريد الالكتروني</span>
                        </label>
                        <select class="form-control col-lg-12  " id="verified" name="verified">
                            <option value="" selected="">الكل</option>
                            <option value="1">مؤكد</option>
                            <option value="0">غير مؤكد</option>
                        </select>
                        <span class="small form-text text-muted">
</span>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                    <div class="form-group mb-4 form-group-status px-2 w-100 mt-auto">
                        <label class="text-dark" for="status">
                            <span dir="auto">حالة الحساب</span>
                        </label>
                        <select class="form-control col-lg-12  " id="status" name="status">
                            <option value="" selected="">الكل</option>
                            <option value="1">فعال</option>
                            <option value="0">غير فعال</option>
                        </select>
                        <span class="small form-text text-muted">
</span>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                </div>
                <div class="d-flex w-100 mt-auto">
                    <div class="form-group mb-4 form-group-q w-100 mt-auto pl-2">
                        <label class="text-dark" for="q">
                            <span dir="auto">البحث..</span>
                        </label>
                        <input class="form-control w-100   " id="q" name="q" type="text" placeholder="يمكنك البحث عن طريق الاسم، البريد الكتروني او اسم المستخدم" value="">
                        <small class="form-text text-muted">
                        </small>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                    <div class="form-group mb-4 form-group- w-100 mt-auto members-select">
                        <label class="text-dark" for="">
                            <span dir="auto">الطلاب الذين اشترو المنتج او الدورة</span>
                            <a class="mb-auto text-muted cursor-default" data-toggle="tooltip" title="" data-original-title="الذين اشترو المنتج او الدورة">
                                <svg class="x-icon w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg> </a>
                        </label>
                        <select class="form-control col-lg-12 select-pro test-class select2-hidden-accessible" id="products[]" name="products[]" data-placeholder="اختر الدورات او المنتجات التي تريدها" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="products[]">
                            <option value="x--disabled" disabled="">الدورات</option>
                            <option value="Course-2052">ملخص كفاح للقدرات</option>
                            <option value="y--disabled" disabled="">المنتجات</option>
                            <option value="Product-1147">منتج منصة كفاح</option>
                            <option value="Product-1148">استشاره</option>
                        </select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="7" style="width: 249.125px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="اختر الدورات او المنتجات التي تريدها" style="width: 237.125px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <span class="small form-text text-muted">
</span>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                </div>
                <div class="pr-md-3 ml-auto ml-md-0 mt-auto mb-4">
                    <button class="btn btn-secondary">فلترة</button>
                    <span class="small form-text text-muted"></span>
                </div>
            </form>
            <div class="mr-md-auto">
                <div class="d-flex align-items-center">
                    <div class="form-group mb-4 form-group-action ">
                        <label class="text-dark" for="action">
                            <span dir="auto">نفذ الأمر</span>
                        </label>
                        <select class="form-control col-lg-12  " id="action" name="action">
                            <option value="" selected="">حدد الأمر</option>
                            <option value="resend-reset-password">ارسل أستعادة كلمة المرور</option>
                            <option value="resend-verification">أرسل تأكيد البريد الالكتروني</option>
                        </select>
                        <span class="small form-text text-muted">
</span>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                    <div class="pr-3">
                        <button class="btn btn-secondary" id="actionButton" onclick="sendAction('/admin/members/action')">
                            ارسال
                        </button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-theme v-middle">
                    <thead>
                    <tr>
                        <th class="font-weight-normal text-md">
                            <input name="btSelectAll" id="btSelectAll" type="checkbox">
                        </th>
                        <th class="font-weight-normal text-md">
                            <a href="https://yzin.msaaq.net/admin/members?sort=name&amp;direction=desc">الاسم</a> <i class="text-muted small fa fa-sort"></i>
                        </th>
                        <th class="font-weight-normal text-md">
                            <a href="https://yzin.msaaq.net/admin/members?sort=status&amp;direction=desc">حالة الحساب</a> <i class="text-muted small fa fa-sort"></i>
                        </th>
                        <th class="font-weight-normal text-md">
                            <a href="https://yzin.msaaq.net/admin/members?sort=email_verified_at&amp;direction=desc">تاكيد صحة البريد</a> <i class="text-muted small fa fa-sort"></i>
                        </th>
                        <th class="font-weight-normal text-md">
                            <a href="https://yzin.msaaq.net/admin/members?sort=last_seen_at&amp;direction=desc">اخر ظهور</a> <i class="text-muted small fa fa-sort"></i>
                        </th>
                        <th class="font-weight-normal text-md">
                            <a href="https://yzin.msaaq.net/admin/members?sort=created_at&amp;direction=desc">تاريخ الانشاء</a> <i class="text-muted small fa fa-sort"></i>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="" data-id="" data-item-sortable-id="" draggable="" role="" aria-grabbed="">
                        <td class="bs-checkbox">
                            <input data-index="0" class="checkbox-class" name="btSelectItem" value="124285" type="checkbox">
                        </td>
                        <td class="item-amount text-md">
                            <a class="d-flex" href="https://yzin.msaaq.net/admin/members/124285">
                                <img class="rounded-circle shadow-sm" width="50" src="https://www.gravatar.com/avatar/d4b10dd5cf0107e7518990e36d74fad3?s=80&amp;d=mm&amp;r=g">
                                <p class="my-auto d-flex flex-column mr-3">
                                    <span> يزن العسيري</span>
                                    <span class="text-muted"> yazeedmv@gmail.com</span>
                                </p>
                            </a>
                        </td>
                        <td class="item-amount text-md">
                            <span class="badge bg-success-lt text-white">فعال</span>
                        </td>
                        <td class="item-amount text-md">
<span data-toggle="tooltip" data-placement="top" class="badge bg-success-lt text-white" title="" data-original-title="2022-04-09 21:47:35">
مؤكد
</span>
                        </td>
                        <td class="item-amount text-md">
                            <div class="d-flex align-items-center">
                            <span title="2022-07-22 09:19:19">
                            منذ دقيقتين
                            </span>
                            </div>
                        </td>
                        <td class="item-amount text-md">
                            <time dir="auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="2022-04-09 21:46:55">
                                منذ 3 أشهر
                            </time>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-dark">
                                    <i class="mr-2 i-con i-con-more-h"><i></i></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="/admin/members/124285/edit" id="edit">
                                        تعديل
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item form-updateType" data-url="/admin/members/updateType/124285" data-location="https://yzin.msaaq.net/admin/students" id="">
                                        اعادة الى الطلاب
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item form-action" data-url="/admin/members/124285" data-msg="">
                                        تعطيل الحساب
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
