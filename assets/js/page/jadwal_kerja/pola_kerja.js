$("#kt_datepicker_8").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
});

$("#kt_datepicker_9").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
});

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

$(function() {
    $("#kt_table_pola_kerja").on("click", function() {
      $("#deleteall").toggle($(this).find(".deletebox:checked").length > 0);
      if($(this).find(".deletebox:checked").length < ($(this).find(".deletebox").length)){
          $('input[name="maincheckbox"]').prop('checked', false);
      }else if($(this).find(".deletebox:checked").length = ($(this).find(".deletebox").length)){
        $('input[name="maincheckbox"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox"]').on("click", function() {
      $('.deletebox').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_jadwal_senin").on("click", function() {
      $("#delete_jadwal_senin").toggle($(this).find(".deletebox_jadwal_senin:checked").length > 0);
      if($(this).find(".deletebox_jadwal_senin:checked").length < ($(this).find(".deletebox_jadwal_senin").length)){
          $('input[name="maincheckbox_jadwal_senin"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_senin:checked").length = ($(this).find(".deletebox_jadwal_senin").length)){
        $('input[name="maincheckbox_jadwal_senin"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_senin"]').on("click", function() {
      $('.deletebox_jadwal_senin').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_jadwal_selasa").on("click", function() {
      $("#delete_jadwal_selasa").toggle($(this).find(".deletebox_jadwal_selasa:checked").length > 0);
      if($(this).find(".deletebox_jadwal_selasa:checked").length < ($(this).find(".deletebox_jadwal_selasa").length)){
          $('input[name="maincheckbox_jadwal_selasa"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_selasa:checked").length = ($(this).find(".deletebox_jadwal_selasa").length)){
        $('input[name="maincheckbox_jadwal_selasa"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_selasa"]').on("click", function() {
      $('.deletebox_jadwal_selasa').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_jadwal_rabu").on("click", function() {
      $("#delete_jadwal_rabu").toggle($(this).find(".deletebox_jadwal_rabu:checked").length > 0);
      if($(this).find(".deletebox_jadwal_rabu:checked").length < ($(this).find(".deletebox_jadwal_rabu").length)){
          $('input[name="maincheckbox_jadwal_rabu"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_rabu:checked").length = ($(this).find(".deletebox_jadwal_rabu").length)){
        $('input[name="maincheckbox_jadwal_rabu"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_rabu"]').on("click", function() {
      $('.deletebox_jadwal_rabu').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_jadwal_kamis").on("click", function() {
      $("#delete_jadwal_kamis").toggle($(this).find(".deletebox_jadwal_kamis:checked").length > 0);
      if($(this).find(".deletebox_jadwal_kamis:checked").length < ($(this).find(".deletebox_jadwal_kamis").length)){
          $('input[name="maincheckbox_jadwal_kamis"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_kamis:checked").length = ($(this).find(".deletebox_jadwal_kamis").length)){
        $('input[name="maincheckbox_jadwal_kamis"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_kamis"]').on("click", function() {
      $('.deletebox_jadwal_kamis').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_jadwal_jumat").on("click", function() {
      $("#delete_jadwal_jumat").toggle($(this).find(".deletebox_jadwal_jumat:checked").length > 0);
      if($(this).find(".deletebox_jadwal_jumat:checked").length < ($(this).find(".deletebox_jadwal_jumat").length)){
          $('input[name="maincheckbox_jadwal_jumat"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_jumat:checked").length = ($(this).find(".deletebox_jadwal_jumat").length)){
        $('input[name="maincheckbox_jadwal_jumat"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_jumat"]').on("click", function() {
      $('.deletebox_jadwal_jumat').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_jadwal_sabtu").on("click", function() {
      $("#delete_jadwal_sabtu").toggle($(this).find(".deletebox_jadwal_sabtu:checked").length > 0);
      if($(this).find(".deletebox_jadwal_sabtu:checked").length < ($(this).find(".deletebox_jadwal_sabtu").length)){
          $('input[name="maincheckbox_jadwal_sabtu"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_sabtu:checked").length = ($(this).find(".deletebox_jadwal_sabtu").length)){
        $('input[name="maincheckbox_jadwal_sabtu"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_sabtu"]').on("click", function() {
      $('.deletebox_jadwal_sabtu').prop('checked', this.checked);
  });
  
});