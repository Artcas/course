<template>
    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 d-flex">
            <h2 class="text-md mb-0">التسويق بالعمولة</h2>
        </div>
        <div class="padding">
            <form method="POST" action="https://yzin.msaaq.net/admin/affiliates" class="row" x-data="{ open: true,
             inviteOnly:false }">
                <input type="hidden" name="_token" value="F5pcG4e17U9h7SUu2TRer0qCK6OscSDV4u5kas1r"> <input type="hidden" name="_method" value="PATCH">
                <div class="col-lg-8 mx-auto">
                    <div class="alert alert-info mb-4">
                        عبر تفعيل نظام التسويق بالعمولة سوف يتمكن مستخدمين الأكاديمية من الحصول على رابط إحالة خاص بهم
                        والحصول على نسبة من المبيعات.
                        <a target="_blank" class="text-info" href="https://help.msaaq.com/how-to-use-affiliate-marketing-program">
                            <i class="fa fa-external-link-alt small"></i>
                            دليل إستخدام برنامج التسويق بالعمولة
                        </a>
                    </div>
                    <div class="form-group mb-4 form-group-enabled d-flex align-items-center">
                        <label class="text-dark" for="enabled">
                            <span dir="auto">تفعيل برنامج التسويق بالعمولة</span>
                        </label>
                        <div class="mr-auto">
                            <label class="ui-switch ui-switch-md">
                                <input checked="&quot;checked&quot;" id="affiliates[enabled]" name="affiliates[enabled]" type="checkbox" @click="open = !open">
                                <i></i>
                            </label>
                        </div>
                        <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                    </div>
                    <div x-show.transition="open">
                        <p class="text-muted">
                            <strong>الاتاحة</strong>
                        </p>
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="form-group mb-4 form-group-type d-flex align-items-center px-4 py-3 mb-md-0">
                                    <label class="text-dark" for="type">
                                        <span dir="auto">متاح لأي شخص</span>
                                        <a class="mb-auto text-muted cursor-default" data-toggle="tooltip" title="" data-original-title="سوف يتمكن اي عضو من استخدام برنامج التسويق بالعمولة">
                                            <svg class="x-icon w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                            </svg> </a>
                                    </label>
                                    <div class="mr-auto">
                                        <label class="ui-switch ui-switch-md">
                                            <input checked="&quot;checked&quot;" id="affiliates[availability]" name="affiliates[availability]" type="radio" @click="inviteOnly=false" value="anyone">
                                            <i></i>
                                        </label>
                                    </div>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                                <div class="form-group mb-4 form-group-type d-flex align-items-center px-4 py-3 b-t mb-md-0">
                                    <label class="text-dark" for="type">
                                        <span dir="auto">المدعوين فقط</span>
                                        <a class="mb-auto text-muted cursor-default" data-toggle="tooltip" title="" data-original-title="فقط المدعوين سوف يتمكنون من استخدام برنامج التسويق بالعمولة">
                                            <svg class="x-icon w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                            </svg> </a>
                                    </label>
                                    <div class="mr-auto">
                                        <label class="ui-switch ui-switch-md">
                                            <input id="affiliates[availability]" name="affiliates[availability]" type="radio" value="anyone" @click="inviteOnly=true" x-bind:checked="inviteOnly">
                                            <i></i>
                                        </label>
                                    </div>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                                <div x-show="inviteOnly" style="border-radius: 0px; display: none;" class="px-4 py-3 mb-md-0 alert alert-warning">
                                    هذه الميزة متاحة فقط في خطة المدرسة او الاكاديمية.
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">
                            <strong>خصائص نظام الإحالة</strong>
                        </p>
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="form-group mb-4 form-group-affiliates[commission] ">
                                    <label class="text-dark" for="affiliates[commission]">
                                        <span dir="auto">عمولة المسوق العامة</span>
                                        <a class="mb-auto text-muted cursor-default" data-toggle="tooltip" title="" data-original-title="نسبة مئوية">
                                            <svg class="x-icon w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                            </svg> </a>
                                    </label>
                                    <input class="form-control w-100   " id="affiliates[commission]" name="affiliates[commission]" type="number" placeholder="ادخل نسبة العمولة من 1 الى 100" value="20" min="1" max="100">
                                    <small class="form-text text-muted">
                                    </small>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                                <div class="form-group mb-4 form-group-affiliates[cookies_period] ">
                                    <label class="text-dark" for="affiliates[cookies_period]">
                                        <span dir="auto">مدة صلاحية الكعكات (Cookies)</span>
                                        <a class="mb-auto text-muted cursor-default" data-toggle="tooltip" title="" data-original-title="عدد الأيام">
                                            <svg class="x-icon w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                            </svg> </a>
                                    </label>
                                    <input class="form-control w-100   " id="affiliates[cookies_period]" name="affiliates[cookies_period]" type="number" placeholder="ادخل عدد الأيام من 1 الى 100" value="30" min="1" max="100">
                                    <small class="form-text text-muted">
                                    </small>
                                    <p class="invalid-feedback text-sm mt-1 filled d-none"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-md btn-primary mx-auto" type="submit">
                            حفظ البيانات </button>
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
