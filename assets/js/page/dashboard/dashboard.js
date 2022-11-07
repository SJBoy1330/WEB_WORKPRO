google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Hadir', 5.85],
        ['Izin', 1.66],
        ['Alpha', 1.316],
        ['Pulang Awal', 2.791],
        ['Terlambat', 2.500]
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
