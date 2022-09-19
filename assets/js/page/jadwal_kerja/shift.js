$("#kt_datepicker_1").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
});

$("#kt_datepicker_2").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
});

$("#kt_datepicker_3").flatpickr();

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}