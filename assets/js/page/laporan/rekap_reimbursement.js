$(function() {
    $("#kt_table_rekap_reimbursement").on("click", function() {
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
  $("#kt_table_rekap_laporan_reimbursement").on("click", function() {
    $("#delete_laporan_reimbursement").toggle($(this).find(".deletebox_laporan_reimbursement:checked").length > 0);
    if($(this).find(".deletebox_laporan_reimbursement:checked").length < ($(this).find(".deletebox_laporan_reimbursement").length)){
        $('input[name="maincheckbox_laporan_reimbursement"]').prop('checked', false);
    }else if($(this).find(".deletebox_laporan_reimbursement:checked").length = ($(this).find(".deletebox_laporan_reimbursement").length)){
      $('input[name="maincheckbox_laporan_reimbursement"]').prop('checked', true);
  }
})
$('input[name="maincheckbox_laporan_reimbursement"]').on("click", function() {
    $('.deletebox_laporan_reimbursement').prop('checked', this.checked);
});

});