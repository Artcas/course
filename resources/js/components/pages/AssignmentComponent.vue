<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">الواجبات</h2>
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
