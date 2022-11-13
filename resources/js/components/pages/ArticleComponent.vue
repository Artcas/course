<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">المقالات</h2>
            <a href="https://yzin.msaaq.net/admin/articles/create" class="mr-auto">
                <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto mr-auto" data-toggle="modal" data-target="#modal-create">
                    <i class="i-con i-con-plus ml-1"></i>
                    <span class="d-none d-md-inline">اضف جديد</span>
                </button>
            </a>
        </div>
        <div class="padding">
            <div class="row list-grouped">
            </div>
            <div class="alert alert-info" role="alert">
                لا يوجد بيانات كافية للعرض.
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
