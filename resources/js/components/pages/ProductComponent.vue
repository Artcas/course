<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">المنتجات</h2>
            <a href="https://yzin.msaaq.net/admin/products/create?type=0" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                    <i class="i-con i-con-plus ml-1"></i>
                    <span class="d-none d-md-inline">اضف جديد</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <div class="d-flex mb-2">
                <a href="https://yzin.msaaq.net/admin/products?type=0" class="btn btn-sm btn-rounded btn-secondary i-con-h-a d-flex align-items-center active">
                    <i class="i-con i-con-shop ml-1"><i></i></i>
                    <span class="d-none d-md-inline">المنتجات</span>
                </a>
                <a href="https://yzin.msaaq.net/admin/products?type=1" class="btn btn-sm btn-rounded btn-secondary i-con-h-a d-flex align-items-center mr-2 ">
                    <i class="mr-2 i-con i-con-layer ml-1"></i>
                    <span class="d-none d-md-inline">المجموعات</span>
                    <span class="badge badge-success mr-2">جديد</span>
                </a>
                <a href="https://yzin.msaaq.net/admin/products?type=2" class="btn btn-sm btn-rounded btn-secondary i-con-h-a d-flex align-items-center mr-2 ">
                    <i class="mr-2 i-con i-con-calendar ml-1"></i>
                    <span class="d-none d-md-inline">جلسات استشارية</span>
                    <span class="badge badge-success mr-2">جديد</span>
                </a>
            </div>
            <table class="table table-theme v-middle">
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
                        عدد التحميلات
                    </th>
                    <th class="font-weight-normal text-md">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="" data-id="" data-item-sortable-id="" draggable="" role="" aria-grabbed="">
                    <td class="item-amount text-md">
                        <div class="d-flex align-items-center">
                            <a class="d-flex items-center cursor-default mr-2" href="https://yzin.msaaq.net/admin/products/1147">
                                منتج منصة كفاح
                            </a>
                        </div>
                    </td>
                    <td class="item-amount text-md">
                        <span class="badge font-weight-normal bg-success p-1">منشورة</span>
                    </td>
                    <td class="item-amount text-md">
                        يزن العسيري
                    </td>
                    <td class="item-amount text-md">
                        $300.00
                    </td>
                    <td class="item-amount text-md">
                    </td>
                    <td class="item-amount text-md">
                        <a href="https://yzin.msaaq.net/admin/products/1147" data-toggle="tooltip" data-placement="top" title="" data-original-title="عرض تقدم الطلبة">
                            0
                        </a>
                    </td>
                    <td>
                        <div class="item-action dropdown">
                            <a href="#" data-toggle="dropdown" class="text-dark">
                                <i class="mr-2 i-con i-con-more-h"><i></i></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                <a class="dropdown-item" href="https://yzin.msaaq.net/products/kefa777">
                                    عرض </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item form-edit" href="https://yzin.msaaq.net/admin/products/1147/edit?type=0">
                                    تعديل
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item form-action" data-url="/admin/products/1147">
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
