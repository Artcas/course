<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#04be5b">
    <title></title>
    <meta name="mobile-web-app-capable" content="yes">
    <script>
        window.App = {"csrfToken":"F5pcG4e17U9h7SUu2TRer0qCK6OscSDV4u5kas1r","env":"production","locale":"ar","dir":"rtl","domain":"https:\/\/yzin.msaaq.net","authenticated":true,"auth":{"id":124285,"first_name":"\u064a\u0632\u0646","last_name":"\u0627\u0644\u0639\u0633\u064a\u0631\u064a","name":"\u064a\u0632\u0646 \u0627\u0644\u0639\u0633\u064a\u0631\u064a","username":"admin","email":"yazeedmv@gmail.com","bio":null,"job_title":null,"dob":null,"country_code":"SA","gender":"female","is_active":true,"type":"staff","skills":null,"phone":null,"email_verified_at":"2022-04-09T18:47:35.000000Z","last_seen_at":"2022-07-22T06:23:51.000000Z","updated_at":"2022-07-19T07:06:16.000000Z","created_at":"2022-04-09T18:46:55.000000Z"},"apiKey":"F5CfjftdIeDoRSHvXu21GagczgOlQFwdq1EjjmlReQKsiV9zr7tDzsZb4qzdHBY6QsFnZse47hiyqnzI","currency":"USD","translations":{"fileUploader":{"chooseImage":"\u0627\u062e\u062a\u0631 \u0627\u0644\u0635\u0648\u0631\u0629","dropItHere":"\u0623\u0648 \u0623\u0633\u0642\u0637\u0647\u0627 \u0647\u0646\u0627","button":"\u062a\u0635\u0641\u062d \u0627\u0644\u0645\u0644\u0641\u0627\u062a","feedback":"\u0627\u0633\u062d\u0628 \u0627\u0644\u0645\u0644\u0641\u0627\u062a \u0648\u0623\u0641\u0644\u062a\u0647\u0627 \u0647\u0646\u0627","feedback2":"\u0627\u0633\u062d\u0628 \u0627\u0644\u0645\u0644\u0641\u0627\u062a \u0648\u0623\u0641\u0644\u062a\u0647\u0627 \u0647\u0646\u0627","drop":"\u0623\u0641\u0644\u062a \u0627\u0644\u0645\u0644\u0641\u0627\u062a \u0647\u0646\u0627 \u0644\u064a\u062a\u0645 \u0631\u0641\u0639\u0647\u0627","or":"\u0627\u0648","confirm":"\u062a\u0627\u0643\u064a\u062f","cancel":"\u0627\u0644\u063a\u0627\u0621","name":"\u0627\u0644\u0627\u0633\u0645","type":"\u0627\u0644\u0646\u0648\u0639","size":"\u0627\u0644\u062d\u062c\u0645","dimensions":"\u0627\u0644\u0627\u0628\u0639\u0627\u062f","duration":"Duration","crop":"\u0642\u0635","rotate":"\u062a\u062f\u0648\u064a\u0631","sort":"\u062a\u0631\u062a\u064a\u0628","download":"\u062a\u062d\u0645\u064a\u0644","remove":"\u062d\u0630\u0641","paste":"<div class=\"fileuploader-pending-loader\"><\/div> Pasting a file, click here to cancel.","removeConfirmation":"\u0647\u0644 \u0623\u0646\u062a \u0645\u062a\u0627\u0643\u062f \u0623\u0646\u0643 \u062a\u0631\u064a\u062f \u062d\u0630\u0641 \u0647\u0630\u0627 \u0627\u0644\u0645\u0644\u0641\u061f","errors":{"filesLimit":"\u0644\u0627 \u064a\u0645\u0643\u0646\u0643 \u0631\u0641\u0639 \u0623\u0643\u062b\u0631 \u0645\u0646 ${limit} \u0645\u0644\u0641.","filesType":"\u0627\u0644\u0635\u064a\u063a \u0627\u0644\u0645\u0633\u0645\u0648\u062d \u0631\u0641\u0639\u0647\u0627 \u0647\u064a: ${extensions}.","fileSize":"\u062d\u062c\u0645 \u0627\u0644\u0635\u0648\u0631\u0629 \u0627\u0644\u0645\u062e\u062a\u0627\u0631\u0629 \u0643\u0628\u064a\u0631 \u062c\u062f\u0627! \u0623\u0642\u0635\u0649 \u062d\u062c\u0645 \u0627\u0644\u0645\u0633\u0645\u0648\u062d \u0628\u0647 \u0647\u0648 ${fileMaxSize}MB.","filesSizeAll":"\u062d\u062c\u0645 \u0627\u0644\u0635\u0648\u0631\u0629 \u0627\u0644\u0645\u062e\u062a\u0627\u0631\u0629 \u0643\u0628\u064a\u0631 \u062c\u062f\u0627! \u0623\u0642\u0635\u0649 \u062d\u062c\u0645 \u0627\u0644\u0645\u0633\u0645\u0648\u062d \u0628\u0647 \u0647\u0648 ${maxSize}MB.","fileName":"\u0627\u0644\u0645\u0644\u0641 \"${name}\" \u0645\u062d\u062f\u062f \u0628\u0627\u0644\u0641\u0639\u0644! ","folderUpload":"\u0644\u0627 \u064a\u0645\u0643\u0646\u0643 \u0631\u0641\u0639 \u0645\u062c\u0644\u062f.","remoteFile":"Remote files are not allowed."}}}}

        window.localStorage.setItem('ACCESS_TOKEN', 'F5CfjftdIeDoRSHvXu21GagczgOlQFwdq1EjjmlReQKsiV9zr7tDzsZb4qzdHBY6QsFnZse47hiyqnzI');
    </script>
    <script>
        window.Frill_Config = window.Frill_Config || [];
        window.Frill_Config.push({key: '9e0b7cf8-8efd-488a-8a91-c28eed5904ea'});
    </script>
    <!--Favicons -->
<!--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer=""></script>
    <script async="" src="https://widget.frill.co/v2/widget.js"></script>
</head>
<body>
<div id="app">
    <layout></layout>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('/libs/pace-progress/pace.min.js') }}"></script>
<script src="{{ asset('js/admin/admin.js') }}"></script>
<script src="{{ asset('/agile/js/lazyload.config.js') }}"></script>
{{--<script src="{{ asset('js//agile/js/lazyload.js') }}"></script>--}}
<script src="{{ asset('/agile/js/plugin.js') }}"></script>
<script src="{{ asset('/libs/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('/agile/js/plugins/jquery.chartjs.js') }}"></script>
<!--<script src="{{ asset('/agile/js/plugins/chartjs.js') }}"></script>-->
<script src="{{ asset('/libs/peity/jquery.peity.js') }}"></script>
<script src="{{ asset('/agile/js/plugins/jquery.peity.tooltip.js') }}"></script>
<script src="{{ asset('agile/js/theme.js') }}"></script>
<script src="{{ asset('/libs/easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
</body>
</html>

