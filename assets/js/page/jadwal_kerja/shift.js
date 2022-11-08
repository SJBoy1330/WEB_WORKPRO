$("#kt_datepicker_2").flatpickr();

$(function() {
    $("#kt_table_shift").on("click", function() {
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
    $("#kt_table_jadwal_shift").on("click", function() {
      $("#delete_jadwal_shift").toggle($(this).find(".deletebox_jadwal_shift:checked").length > 0);
      if($(this).find(".deletebox_jadwal_shift:checked").length < ($(this).find(".deletebox_jadwal_shift").length)){
          $('input[name="maincheckbox_jadwal_shift"]').prop('checked', false);
      }else if($(this).find(".deletebox_jadwal_shift:checked").length = ($(this).find(".deletebox_jadwal_shift").length)){
        $('input[name="maincheckbox_jadwal_shift"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_jadwal_shift"]').on("click", function() {
      $('.deletebox_jadwal_shift').prop('checked', this.checked);
  });
  
});