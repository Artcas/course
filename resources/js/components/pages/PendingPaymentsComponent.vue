<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">المعاملات المالية</h2>
        </div>
        <div class="padding">
            <div class="table-responsive">
                <table class="table table-theme table-striped v-middle">
                    <thead>
                    <tr>
                        <th class="font-weight-normal text-md">
                            النوع
                        </th>
                        <th class="font-weight-normal text-md">
                            صاحب الطلب
                        </th>
                        <th class="font-weight-normal text-md">
                            المبلغ
                        </th>
                        <th class="font-weight-normal text-md">
                            الوصف
                        </th>
                        <th class="font-weight-normal text-md">
                            الوسيلة
                        </th>
                        <th class="font-weight-normal text-md">
                            الحالة
                        </th>
                        <th class="font-weight-normal text-md">
                            التاريخ
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
