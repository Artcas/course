<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">التقييمات</h2>
        </div>
        <div class="padding">
            <table class="table table-theme v-middle">
                <thead>
                <tr>
                    <th class="font-weight-normal text-md">
                        العنوان
                    </th>
                    <th class="font-weight-normal text-md">
                        المحتوى
                    </th>
                    <th class="font-weight-normal text-md">
                        المعلق
                    </th>
                    <th class="font-weight-normal text-md">
                        الحالة
                    </th>
                    <th class="font-weight-normal text-md">
                        التقييم
                    </th>
                    <th class="font-weight-normal text-md">
                        تاريخ الانشاء
                    </th>
                    <th class="font-weight-normal text-md">
                    </th>
                </tr>
                </thead> <tbody>
            </tbody>
            </table>
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
