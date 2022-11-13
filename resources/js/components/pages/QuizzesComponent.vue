<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">الاختبارات</h2>
            <a href="https://yzin.msaaq.net/admin/quizzes/create" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto" type="submit">
                    <i class="i-con i-con-plus ml-1"></i>
                    <span class="d-none d-md-inline">اضف جديد</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <form method="get">
                <div class="form-group mb-4 form-group-q ">
                    <label class="text-dark" for="q">
                        <span dir="auto">البحث..</span>
                    </label>
                    <div class="d-flex">
                        <input class="form-control w-100   " id="q" name="q" type="text" placeholder="يمكنك البحث عن طريق اسم الدورة" value="">
                        <small class="form-text text-muted">
                        </small>
                        <button class="btn btn-primary mr-3">بحث</button>
                    </div>
                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                </div>
            </form>
            <table class="table table-theme v-middle mt-2">
                <thead>
                <tr>
                    <th class="font-weight-normal text-md">
                        <a href="https://yzin.msaaq.net/admin/quizzes?sort=title&amp;direction=desc">العنوان</a> <i class="text-muted small fa fa-sort"></i>
                    </th>
                    <th class="font-weight-normal text-md">
                        عدد الاجابات
                    </th>
                    <th class="font-weight-normal text-md">
                        <a href="https://yzin.msaaq.net/admin/quizzes?sort=randomised&amp;direction=desc">عرض الأسئلة</a> <i class="text-muted small fa fa-sort"></i>
                    </th>
                    <th class="font-weight-normal text-md">
                        <a href="https://yzin.msaaq.net/admin/quizzes?sort=passing_score&amp;direction=desc">معدل الإجتياز</a> <i class="text-muted small fa fa-sort"></i>
                    </th>
                    <th class="font-weight-normal text-md">
                        <a href="https://yzin.msaaq.net/admin/quizzes?sort=created_at&amp;direction=desc">تاريخ الانشاء</a> <i class="text-muted small fa fa-sort"></i>
                    </th>
                </tr>
                </thead> <tbody>
            </tbody>
            </table>
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
