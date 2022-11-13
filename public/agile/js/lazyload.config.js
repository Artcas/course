// lazyload config
var MODULE_CONFIG = {
    chat: [
        '/libs/list.js/dist/list.js',
        '/libs/notie/dist/notie.min.js',
        '/agile/js/plugins/notie.js',
        '/agile/js/app/chat.js'
    ],
    mail: [
        '/libs/list.js/dist/list.js',
        '/libs/notie/dist/notie.min.js',
        '/agile/js/plugins/notie.js',
        '/agile/js/app/mail.js'
    ],
    user: [
        '/libs/list.js/dist/list.js',
        '/libs/notie/dist/notie.min.js',
        '/agile/js/plugins/notie.js',
        '/agile/js/app/user.js'
    ],
    search: [
        '/libs/list.js/dist/list.js',
        '/agile/js/app/search.js'
    ],
    invoice: [
        '/libs/list.js/dist/list.js',
        '/libs/notie/dist/notie.min.js',
        '/agile/js/app/invoice.js'
    ],
    screenfull: [
        '/libs/screenfull/dist/screenfull.js',
        '/agile/js/plugins/screenfull.js'
    ],
    jscroll: [
        '/libs/jscroll/dist/jquery.jscroll.min.js'
    ],
    countTo: [
        '/libs/jquery-countto/jquery.countTo.js'
    ],
    stick_in_parent: [
        '/libs/sticky-kit/dist/sticky-kit.min.js'
    ],
    stellar: [
        '/libs/jquery.stellar/jquery.stellar.min.js',
        '/agile/js/plugins/stellar.js'
    ],
    scrollreveal: [
        '/libs/scrollreveal/dist/scrollreveal.min.js',
        '/agile/js/plugins/jquery.scrollreveal.js'
    ],
    masonry: [
        '/libs/masonry-layout/dist/masonry.pkgd.min.js'
    ],
    owlCarousel: [
        '/libs/owl.carousel/dist/assets/owl.carousel.min.css',
        '/libs/owl.carousel/dist/assets/owl.theme.css',
        '/libs/owl.carousel/dist/owl.carousel.min.js'
    ],
    html5sortable: [
        '/libs/html5sortable/dist/html.sortable.min.js',
        '/agile/js/plugins/jquery.html5sortable.js',
        '/agile/js/plugins/sortable.js'
    ],
    easyPieChart: [
        '/libs/easy-pie-chart/dist/jquery.easypiechart.min.js'
    ],
    peity: [
        '/libs/peity/jquery.peity.js',
        '/agile/js/plugins/jquery.peity.tooltip.js'
    ],
    chartjs: [
        '/libs/moment/min/moment-with-locales.min.js',
        '/libs/chart.js/dist/Chart.min.js',
        '/agile/js/plugins/jquery.chartjs.js',
        '/agile/js/plugins/chartjs.js'
    ],
    dataTable: [
        '/libs/datatables/media/js/jquery.dataTables.min.js',
        '/libs/datatables.net-bs4/js/dataTables.bootstrap4.js',
        '/libs/datatables.net-bs4/css/dataTables.bootstrap4.css',
        '/agile/js/plugins/datatable.js'
    ],
    bootstrapTable: [
        '/libs/bootstrap-table/dist/bootstrap-table.min.js',
        '/libs/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js',
        '/libs/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.min.js',
        '/agile/js/plugins/tableExport.min.js',
        '/agile/js/plugins/bootstrap-table.js'
    ],
    bootstrapWizard: [
        '/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
    ],
    dropzone: [
        '/libs/dropzone/dist/min/dropzone.min.js',
        '/libs/dropzone/dist/min/dropzone.min.css'
    ],
    typeahead: [
        '/libs/typeahead.js/dist/typeahead.bundle.min.js',
        '/agile/js/plugins/typeahead.js'
    ],
    datepicker: [
        "../libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
        "../libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
    ],
    daterangepicker: [
        "../libs/daterangepicker/daterangepicker.css",
        '/libs/moment/min/moment-with-locales.min.js',
        "../libs/daterangepicker/daterangepicker.js"
    ],
    fullCalendar: [
        '/libs/moment/min/moment-with-locales.min.js',
        '/libs/fullcalendar/dist/fullcalendar.min.js',
        '/libs/fullcalendar/dist/fullcalendar.min.css',
        '/agile/js/app/calendar.js'
    ],
    parsley: [
        '/libs/parsleyjs/dist/parsley.min.js'
    ],
    select2: [
        '/libs/select2/dist/css/select2.min.css',
        '/libs/select2/dist/js/select2.min.js',
        '/agile/js/plugins/select2.js'
    ],
    summernote: [
        '/libs/summernote/dist/summernote.css',
        '/libs/summernote/dist/summernote-bs4.css',
        '/libs/summernote/dist/summernote.min.js',
        '/libs/summernote/dist/summernote-bs4.min.js'
    ],
    vectorMap: [
        '/libs/jqvmap/dist/jqvmap.min.css',
        '/libs/jqvmap/dist/jquery.vmap.js',
        '/libs/jqvmap/dist/maps/jquery.vmap.world.js',
        '/libs/jqvmap/dist/maps/jquery.vmap.usa.js',
        '/libs/jqvmap/dist/maps/jquery.vmap.france.js',
        '/agile/js/plugins/jqvmap.js'
    ],
    plyr: [
        '/libs/plyrist/src/plyrist.css',
        '/libs/plyrist/src/plyrist.js',
        '/libs/plyr/dist/plyr.css',
        '/libs/plyr/dist/plyr.polyfilled.min.js',
        '/agile/js/plugins/plyr.js'
    ]
};

var MODULE_OPTION_CONFIG = {
    parsley: {
        errorClass: 'is-invalid',
        successClass: 'is-valid',
        errorsWrapper: '<ul class="list-unstyled text-sm mt-1 text-muted"></ul>'
    }
}
