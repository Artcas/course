<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">الدورات</h2>
            <a href="https://yzin.msaaq.net/admin/courses/create" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                    <i class="i-con i-con-plus ml-1"></i>
                    <span class="d-none d-md-inline">اضف جديد</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <table class="table table-theme v-middle" id="table">
                <thead>
                <tr>
                    <th class="font-weight-normal text-md">
                        العنوان
                    </th>
                    <th class="font-weight-normal text-md">
                        الحالة
                    </th>
                    <th class="font-weight-normal text-md">
                        المدرب
                    </th>
                    <th class="font-weight-normal text-md">
                        السعر
                    </th>
                    <th class="font-weight-normal text-md">
                        التصنيف
                    </th>
                    <th class="font-weight-normal text-md">
                        عدد الملتحقين
                    </th>
                    <th class="font-weight-normal text-md">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="" data-id="" data-item-sortable-id="" draggable="" role="" aria-grabbed="">
                    <td class="item-amount text-md">
                        <div class="d-flex align-items-center">
                            <a class="d-flex items-center cursor-default mr-2" href="https://yzin.msaaq.net/admin/courses/2052/chapters">
                                ملخص كفاح للقدرات
                            </a>
                        </div>
                    </td>
                    <td class="item-amount text-md">
                        <span class="badge font-weight-normal bg-success p-1">منشورة</span>
                    </td>
                    <td class="item-amount text-md">
                        <span class="badge bg-primary p-1">يزن العسيري</span>
                    </td>
                    <td class="item-amount text-md">
                        $300.00
                    </td>
                    <td class="item-amount text-md">
                        غير مصنف
                    </td>
                    <td class="item-amount text-md">
                        <a href="https://yzin.msaaq.net/admin/courses/2052/enrollments" data-toggle="tooltip" data-placement="top" title="" data-original-title="عرض تقدم الطلبة">
                            1
                            طالب
                        </a>
                    </td>
                    <td>
                        <div class="item-action dropdown">
                            <a href="#" data-toggle="dropdown" class="text-dark">
                                <i class="mr-2 i-con i-con-more-h"><i></i></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                <a class="dropdown-item" href="https://yzin.msaaq.net/courses/kefa7">
                                    عرض </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://yzin.msaaq.net/cart/checkout/express/course/2052">
                                    شراء مباشر
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item form-edit" href="https://yzin.msaaq.net/admin/courses/2052/edit">
                                    تعديل
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="https://yzin.msaaq.net/admin/courses/2052/replicate">
                                    <input type="hidden" name="_token" value="F5pcG4e17U9h7SUu2TRer0qCK6OscSDV4u5kas1r"> <input type="hidden" name="_method" value="POST">
                                    <button class="dropdown-item conformable" data-text="عند نسخك للدورة سوف يتم ربط نفس المواد، في حال أردت تعديل محتوى المادة دون ان يتعدل في الدورة الاساسية، يجب عليك اضافته كمادة جديدة.">
                                        استنساخ
                                    </button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item form-action" data-url="/admin/courses/2052">
                                    حذف
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
