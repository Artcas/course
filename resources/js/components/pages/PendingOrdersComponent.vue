<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">الطلبات</h2>
            <a href="https://yzin.msaaq.net/admin/orders/export" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                    <i class="i-con i-con-download ml-1"></i>
                    <span class="d-none d-md-inline">تصدير بيانات الطلبات</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <div class="d-flex flex-column ">
                <form method="get" class="d-flex flex-grow">
                    <div class="form-group mb-4 form-group-code w-75">
                        <input class="form-control w-100   " id="q" name="q" type="text" placeholder="يمكنك البحث عن طريق الاسم، البريد الكتروني او اسم المستخدم" value="">
                        <small class="form-text text-muted">
                        </small>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                    <div class="form-group mb-4 form-group-type w-50 pr-3">
                        <select class="form-control col-lg-12  " id="status" name="status">
                            <option value="" selected="">الكل</option>
                            <option value="1">بانتظار الدفع</option>
                            <option value="2">قيد الإنتظار</option>
                            <option value="7">فشلت عملية الدفع</option>
                            <option value="5">ملغي</option>
                            <option value="3">قيد التنفيذ</option>
                            <option value="4">مُكتمل</option>
                            <option value="6">مُسترّد</option>
                        </select>
                        <span class="small form-text text-muted">
</span>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                    <div class="pr-3">
                        <button class="btn btn-primary d-block px-4 text-center">بحث</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-theme v-middle">
                    <thead>
                    <tr>
                        <th class="font-weight-normal text-md">
                            #
                        </th>
                        <th class="font-weight-normal text-md" width="1%">
                            صاحب الطلب
                        </th>
                        <th class="font-weight-normal text-md">
                            المسوق
                        </th>
                        <th class="font-weight-normal text-md">
                            طرقق الدفع
                        </th>
                        <th class="font-weight-normal text-md">
                            كود الخصم
                        </th>
                        <th class="font-weight-normal text-md">
                            عدد المنتجات
                        </th>
                        <th class="font-weight-normal text-md">
                            حالة الطلب
                        </th>
                        <th class="font-weight-normal text-md">
                            المبلغ
                        </th>
                        <th class="font-weight-normal text-md">
                            حصة المسوق
                        </th>
                        <th class="font-weight-normal text-md">
                            صافي الربح
                        </th>
                        <th class="font-weight-normal text-md">
                            تاريخ الطلب
                        </th>
                        <th class="font-weight-normal text-md">
                        </th>
                    </tr>
                    </thead> <tbody>
                </tbody>
                </table>
            </div>
            <div class="text-center">
            </div>
            <div class="alert alert-info" id="empty-alert" role="alert">
                لا يوجد بيانات كافية للعرض.
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
