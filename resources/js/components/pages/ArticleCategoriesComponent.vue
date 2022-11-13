<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">تصنيفات المقالات</h2>
            <button class="btn btn-sm btn-rounded btn-primary i-con-h-a d-flex align-items-center mb-auto mr-auto" data-toggle="modal" data-target="#modal-create">
                <i class="i-con i-con-plus ml-1"></i>
                <span class="d-none d-md-inline">اضف جديد</span>
            </button>
        </div>
        <div class="padding">
            <table class="table table-theme v-middle">
                <thead>
                <tr>
                    <th class="font-weight-normal text-md">
                        التصنيف
                    </th>
                    <th class="font-weight-normal text-md">
                        الاسم الظاهر في الرابط
                    </th>
                    <th class="font-weight-normal text-md">
                        تاريخ الانشاء
                    </th>
                </tr>
                </thead> <tbody>
            <tr class="" data-id="" data-item-sortable-id="" draggable="" role="" aria-grabbed="" id="taxonomy-16800">
                <td class="item-amount text-md">
                    <div class="d-flex align-items-center">
                        <a class="d-flex items-center ">
<span class="icon-preview  bg-light rounded d-flex" style="background-image: url('')">
<i class="m-auto">ع</i>
</span>
                            <span class="mr-3 my-auto">عام</span>
                        </a>
                    </div>
                </td>
                <td class="item-amount text-md">
                    <code class="small text-dark">عام</code>
                </td>
                <td class="item-amount text-md">
                    <time title="09.04.2022">
                        منذ 3 أشهر
                    </time>
                </td>
                <td>
                    <div class="item-action dropdown">
                        <a href="#" data-toggle="dropdown" class="text-dark">
                            <i class="mr-2 i-con i-con-more-h"><i></i></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                            <a class="dropdown-item" data-toggle="modal" data-target="#edit-16800">
                                تعديل
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item form-action" data-url="/admin/article-categories/16800">
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
