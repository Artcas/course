<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">استيراد الطلاب</h2>
        </div>
        <div class="padding">
            <form action="https://yzin.msaaq.net/admin/members/import" enctype="multipart/form-data" method="post">
                <input type="hidden" name="_token" value="F5pcG4e17U9h7SUu2TRer0qCK6OscSDV4u5kas1r">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="alert bg-warning mb-5" role="alert">
                            <strong>ملاحظة</strong>
                            يجب ان يكون الملف بصيغة
                            <code>xlsx</code>
                            كما يجب ان يكون مطابق تمام
                            <a href="https://bit.ly/students-importer" target="_blank">
                                للملف التالي
                            </a>
                            يمكنك اخذ نسخة منه واضفة بيانات طلابك اليه.
                        </div>
                        <div class="card ">
                            <div class="card-body pb-0">
                                <div class="form-group mb-4 form-group-file ">
                                    <label class="text-dark" for="file">
                                        <span dir="auto">ملف بيانات الطلاب (XLSX)</span>
                                    </label>
                                    <div class="fileuploader fileuploader-theme-default"><input type="hidden" name="fileuploader-list-file" value="[]"><input type="file" name="file" id="file" data-fileuploader="default" style="position: absolute; z-index: -9999; height: 0px; width: 0px; padding: 0px; margin: 0px; line-height: 0; outline: 0px; border: 0px; opacity: 0;"><div class="fileuploader-input"><div class="fileuploader-input-caption"><span>اسحب الملفات وأفلتها هنا</span></div><button type="button" class="fileuploader-input-button"><span>تصفح الملفات</span></button></div><div class="fileuploader-items"><ul class="fileuploader-items-list"></ul></div></div>
                                    <small class="form-text text-muted">
                                    </small>
                                    <strong class="small font-weight-bold mb-2">ملاحظات</strong>
                                    <ol class="flex flex-column mt-2">
                                        <li class="mb-2">
                                            سوف يتم تجاهل البريد الالكتروني المسجل مسبقاً.
                                        </li>
                                        <li class="mb-2">
                                            ان لم تقم بتعطيل خيار ارسال رسالة تفعيل البريد،
                                            <br>
                                            سوف يتم ارسال بريد الكتروني للطالب ليفعل حسابه، ويضيف كلمة مرور.
                                        </li>
                                    </ol>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                            </div>
                        </div>
                        <strong class="text-muted d-block mb-2">التخصيص</strong>
                        <div class="card ">
                            <div class="card-body p-0">
                                <div class="form-group mb-4 form-group-send_notification d-flex align-items-center px-4 pt-3 mb-md-0">
                                    <label class="text-dark" for="send_notification">
                                        <span dir="auto">ارسل رسالة تفعيل البريد</span>
                                    </label>
                                    <div class="mr-auto">
                                        <label class="ui-switch ui-switch-md">
                                            <input checked="&quot;checked&quot;" id="send_notification" name="send_notification" type="checkbox">
                                            <i></i>
                                        </label>
                                    </div>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                                <p class="text-muted px-4 mb-3">
                                    سوف نرسل بريد الكتروني للطالب كي ياكد حسابه
                                    وكي يضع كلمة مرور له.
                                </p>
                                <div class="form-group mb-4 form-group-products[] px-4 pt-3 mb-md-0 b-t">
                                    <label class="text-dark" for="products[]">
                                        <span dir="auto">هل تريد اعطاء الطلاب وصول الى احد منتجاتك بشكل مسبق؟</span>
                                    </label>
                                    <select class="form-control col-lg-12 select-pro select2-hidden-accessible" id="products[]" name="products[]" multiple="" data-placeholder="اضغط لاختيار المنتجات.." tabindex="-1" aria-hidden="true" data-select2-id="products[]">
                                        <option value="1147">
                                            منتج منصة كفاح
                                        </option>
                                        <option value="1148">
                                            استشاره
                                        </option>
                                    </select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="5" style="width: 659.328px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="اضغط لاختيار المنتجات.." style="width: 647.328px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <span class="small form-text text-muted">
</span>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                                <div class="form-group mb-4 form-group-courses[] px-4 pt-3 mb-md-0">
                                    <label class="text-dark" for="courses[]">
                                        <span dir="auto">هل تريد اعطاء الطلاب وصول الى دورات بشكل مسبق؟</span>
                                    </label>
                                    <select class="form-control col-lg-12 select-pro select2-hidden-accessible" id="courses[]" name="courses[]" multiple="" data-placeholder="اضغط لاختيار الدورات.." tabindex="-1" aria-hidden="true" data-select2-id="courses[]">
                                        <option value="2052">
                                            ملخص كفاح للقدرات
                                        </option>
                                    </select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="7" style="width: 659.328px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="اضغط لاختيار الدورات.." style="width: 647.328px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <span class="small form-text text-muted">
</span>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                                <div class="alert alert-warning mx-4 mt-3">
                                    <p>
                                        اعطاء الطلاب المستوردين وصول الى المنتجات المحددة
                                        سوف يمكنهم من تحميل ملفات المنتج مباشرة دون دفع الرسوم،
                                        وسوف تضاف ضمن منتجات الطالب في حسابه.
                                    </p>
                                    <p>
                                        وايضا, اعطائهم وصول الى الدورات المحددة
                                        سوف يمكنهم من حضور الدورة مباشرة دون الاشتراك بها ودفع الرسوم،
                                        وسوف تضاف ضمن دورات الطالب في حسابه.
                                        <strong class="mt-2 d-block">مثال توضيحي:</strong>
                                        هذا الخيار يفيد ان كنت تنقل طلابك من منصة اخرى ولا تريدهم
                                        ان يخسرو الوصول الى الدورات التي قامو بالالتحاق بها.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-md bg-primary mb-1 mx-auto" type="submit">
                                استيراد الطلاب
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
