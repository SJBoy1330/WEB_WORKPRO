$(function() {
    $("#kt_table_rekap_prospek").on("click", function() {
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
  $("#kt_table_rekap_laporan_prospek").on("click", function() {
    $("#delete_laporan_prospek").toggle($(this).find(".deletebox_laporan_prospek:checked").length > 0);
    if($(this).find(".deletebox_laporan_prospek:checked").length < ($(this).find(".deletebox_laporan_prospek").length)){
        $('input[name="maincheckbox_laporan_prospek"]').prop('checked', false);
    }else if($(this).find(".deletebox_laporan_prospek:checked").length = ($(this).find(".deletebox_laporan_prospek").length)){
      $('input[name="maincheckbox_laporan_prospek"]').prop('checked', true);
  }
})
$('input[name="maincheckbox_laporan_prospek"]').on("click", function() {
    $('.deletebox_laporan_prospek').prop('checked', this.checked);
});

});