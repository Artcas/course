<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">القسائم</h2>
            <a href="https://yzin.msaaq.net/admin/coupons/create" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                    <i class="i-con i-con-plus ml-1"></i>
                    <span class="d-none d-md-inline">اضف جديد</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <p class="text-dark">البحث..</p>
            <form method="get" class="d-flex flex-grow">
                <div class="form-group mb-4 form-group-code w-75">
                    <input class="form-control w-100   " id="code" name="code" type="text" placeholder="يمكنك البحث عن طريق كود أو اسم الكوبون" value="">
                    <small class="form-text text-muted">
                    </small>
                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                </div>
                <div class="form-group mb-4 form-group-type w-50 pr-3">
                    <select class="form-control col-lg-12  " id="type" name="type">
                        <option value="" selected="">نوع الكوبون</option>
                        <option value="1">نسبة مئوية</option>
                        <option value="2">رقم ثابت</option>
                    </select>
                    <span class="small form-text text-muted">
</span>
                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                </div>
                <div class="pr-3">
                    <button class="btn btn-primary d-block px-4 text-center">بحث</button>
                </div>
            </form>
            <form method="get" class="d-flex align-items-center">
                <div class="form-group mb-4 form-group-expiry pl-3">
                    <label class="text-dark" for="expiry">
                        <span dir="auto">صلاحية الكوبون</span>
                    </label>
                    <select class="form-control col-lg-12  " id="expiry" name="expiry">
                        <option value="" selected="">الكل</option>
                        <option value="1">منتهي الصلاحية</option>
                        <option value="2">فعال</option>
                        <option value="3">لايملك تاريخ صلاحية</option>
                    </select>
                    <span class="small form-text text-muted">
</span>
                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                </div>
                <div class="pl-3">
                    <button class="btn btn-secondary d-block px-4 text-center">فلترة</button>
                </div>
            </form>
            <table class="table table-theme v-middle" id="table">
                <thead>
                <tr>
                    <th class="font-weight-normal text-md">
                        كود القسيمة
                    </th>
                    <th class="font-weight-normal text-md">
                        نسبة الخصم/القيمة
                    </th>
                    <th class="font-weight-normal text-md">
                        نوع الخصم
                    </th>
                    <th class="font-weight-normal text-md">
                        حد الإستخدام الكلي
                    </th>
                    <th class="font-weight-normal text-md">
                        حدّ الإستخدام لكل مستخدم
                    </th>
                    <th class="font-weight-normal text-md">
                        تاريخ انتهاء الصلاحية
                    </th>
                    <th class="font-weight-normal text-md">
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white">
                </tbody>
            </table>
            <div class="alert alert-info" id="empty-alert" role="alert">
                لا يوجد بيانات كافية للعرض.
            </div>
            <div class="d-flex justify-content-center mb-3">
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
