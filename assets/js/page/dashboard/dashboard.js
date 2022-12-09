google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Tepat', tepat],
        ['Izin', izin],
        ['Alpha', alpha],
        ['Terlambat', terlambat]
    ]);

    var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
        'width': 360,
        'height': 350,
        colors: ['#FFB600', '#FFC83E', '#FFD56E', '#FFE196', '#FDE8B4']
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}

// tinymce.init({
//     selector: '#kt_docs_tinymce_basic'
// });

$("#kt_datepicker_1").flatpickr();


const element = document.getElementById("kt_docs_fullcalendar_basic");

var todayDate = moment().startOf("day");
var YM = todayDate.format("YYYY-MM");
var YESTERDAY = todayDate.clone().subtract(1, "day").format("YYYY-MM-DD");
var TODAY = todayDate.format("YYYY-MM-DD");
var TOMORROW = todayDate.clone().add(1, "day").format("YYYY-MM-DD");

var calendarEl = document.getElementById("kt_docs_fullcalendar_basic");
var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
        right: "title",
        left: "prev,next today"
    },

    height: 800,
    contentHeight: 780,
    aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

    nowIndicator: true,
    now: TODAY + "T09:25:00", // just for demo

    views: {
        dayGridMonth: { buttonText: "month" },
        timeGridWeek: { buttonText: "week" },
        timeGridDay: { buttonText: "day" }
    },

    initialView: "dayGridMonth",
    initialDate: TODAY,

    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    navLinks: true,

    eventContent: function (info) {
        var element = $(info.el);

        if (info.event.extendedProps && info.event.extendedProps.description) {
            if (element.hasClass("fc-day-grid-event")) {
                element.data("content", info.event.extendedProps.description);
                element.data("placement", "top");
                KTApp.initPopover(element);
            } else if (element.hasClass("fc-time-grid-event")) {
                element.find(".fc-title").append("<div class='fc-description'> + info.event.extendedProps.description + </div>");
            } else if (element.find(".fc-list-item-title").lenght !== 0) {
                element.find(".fc-list-item-title").append("<div class='fc-description'> + info.event.extendedProps.description + </div>");
            }
        }
    }
});

calendar.render();

$("#kt_datepicker_2").flatpickr();


$(function () {
    var tab_penjelasan = document.getElementById('tab_penjelasan');
    var tab_persetujuan = document.getElementById('tab_persetujuan');
    $("#kt_table_content_presensi").on("click", function () {
        $("#delete_tukar_shift").toggle($(this).find(".deletebox:checked").length > 0);
        if ($(this).find(".deletebox:checked").length < ($(this).find(".deletebox").length)) {
            $('input[name="maincheckbox"]').prop('checked', false);
        } else if ($(this).find(".deletebox:checked").length = ($(this).find(".deletebox").length)) {
            $('input[name="maincheckbox"]').prop('checked', true);
        }
    })
    $('input[name="maincheckbox"]').on("click", function () {
        // console.log('ok');
        if (this.checked) {
            tab_persetujuan.classList.remove('d-none');
            tab_penjelasan.classList.add('d-none');
        } else {
            tab_persetujuan.classList.add('d-none');
            tab_penjelasan.classList.remove('d-none');
        }
        $('.deletebox').prop('checked', this.checked);
    });

});

// $(function () {
//     $("#kt_table_tukar_shift").on("click", function () {
//         $("#delete_tukar_shift").toggle($(this).find(".deletebox_tukar_shift:checked").length > 0);
//         if ($(this).find(".deletebox_tukar_shift:checked").length < ($(this).find(".deletebox_tukar_shift").length)) {
//             $('input[name="maincheckbox_tukar_shift"]').prop('checked', false);
//         } else if ($(this).find(".deletebox_tukar_shift:checked").length = ($(this).find(".deletebox_tukar_shift").length)) {
//             $('input[name="maincheckbox_tukar_shift"]').prop('checked', true);
//         }
//     })
//     $('input[name="maincheckbox_tukar_shift"]').on("click", function () {
//         $('.deletebox_tukar_shift').prop('checked', this.checked);
//     });

// });

// $(function () {
//     $("#kt_table_reimbursement").on("click", function () {
//         $("#delete_reimbursement").toggle($(this).find(".deletebox_reimbursement:checked").length > 0);
//         if ($(this).find(".deletebox_reimbursement:checked").length < ($(this).find(".deletebox_reimbursement").length)) {
//             $('input[name="maincheckbox_reimbursement"]').prop('checked', false);
//         } else if ($(this).find(".deletebox_reimbursement:checked").length = ($(this).find(".deletebox_reimbursement").length)) {
//             $('input[name="maincheckbox_reimbursement"]').prop('checked', true);
//         }
//     })
//     $('input[name="maincheckbox_reimbursement"]').on("click", function () {
//         $('.deletebox_reimbursement').prop('checked', this.checked);
//     });

// });

// $(function () {
//     $("#kt_table_lembur").on("click", function () {
//         $("#delete_lembur").toggle($(this).find(".deletebox_lembur:checked").length > 0);
//         if ($(this).find(".deletebox_lembur:checked").length < ($(this).find(".deletebox_lembur").length)) {
//             $('input[name="maincheckbox_lembur"]').prop('checked', false);
//         } else if ($(this).find(".deletebox_lembur:checked").length = ($(this).find(".deletebox_lembur").length)) {
//             $('input[name="maincheckbox_lembur"]').prop('checked', true);
//         }
//     })
//     $('input[name="maincheckbox_lembur"]').on("click", function () {
//         $('.deletebox_lembur').prop('checked', this.checked);
//     });

// });

// $(function () {
//     $("#kt_table_izin_kerja").on("click", function () {
//         $("#delete_izin_kerja").toggle($(this).find(".deletebox_izin_kerja:checked").length > 0);
//         if ($(this).find(".deletebox_izin_kerja:checked").length < ($(this).find(".deletebox_izin_kerja").length)) {
//             $('input[name="maincheckbox_izin_kerja"]').prop('checked', false);
//         } else if ($(this).find(".deletebox_izin_kerja:checked").length = ($(this).find(".deletebox_izin_kerja").length)) {
//             $('input[name="maincheckbox_izin_kerja"]').prop('checked', true);
//         }
//     })
//     $('input[name="maincheckbox_izin_kerja"]').on("click", function () {
//         $('.deletebox_izin_kerja').prop('checked', this.checked);
//     });

// });






function manipulasi_tab(text = 'Presensi', pagination = null) {
    $('#manipulasi_tab').text(text);
    if (pagination != null) {
        var pg_active = document.querySelector('.pagination.muncul');
        var pg = document.getElementById(pagination);
        pg.classList.remove('d-none');
        pg.classList.add('muncul');
        pg_active.classList.add('d-none');
        pg_active.classList.remove('muncul');
    }
}

// $('#pagination_presensi').pagination({
//     dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 100],
//     pageSize: 5,
//     showPrevious: false,
//     showNext: false,
//     callback: function (data, pagination) {
//         // template method of yourself
//         var html = template(data);
//         dataContainer.html(html);
//     }
// })

function cek() {
    console.log('bisa bestieh');
}