$(function() {
    $("#kt_table_rekap_presensi").on("click", function() {
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
    $("#kt_table_rekap_laporan_presensi").on("click", function() {
      $("#delete_laporan_presensi").toggle($(this).find(".deletebox_laporan_presensi:checked").length > 0);
      if($(this).find(".deletebox_laporan_presensi:checked").length < ($(this).find(".deletebox_laporan_presensi").length)){
          $('input[name="maincheckbox_laporan_presensi"]').prop('checked', false);
      }else if($(this).find(".deletebox_laporan_presensi:checked").length = ($(this).find(".deletebox_laporan_presensi").length)){
        $('input[name="maincheckbox_laporan_presensi"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_laporan_presensi"]').on("click", function() {
      $('.deletebox_laporan_presensi').prop('checked', this.checked);
  });

});