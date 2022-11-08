$("#kt_datepicker_1").flatpickr();
$("#kt_datepicker_2").flatpickr();

$(function() {
    $("#kt_table_tukar_shift").on("click", function() {
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
    $("#kt_table_presensi").on("click", function() {
      $("#delete_presensi").toggle($(this).find(".deletebox_presensi:checked").length > 0);
      if($(this).find(".deletebox_presensi:checked").length < ($(this).find(".deletebox_presensi").length)){
          $('input[name="maincheckbox_presensi"]').prop('checked', false);
      }else if($(this).find(".deletebox_presensi:checked").length = ($(this).find(".deletebox_presensi").length)){
        $('input[name="maincheckbox_presensi"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_presensi"]').on("click", function() {
      $('.deletebox_presensi').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_tukar_shift_modal").on("click", function() {
      $("#delete_tukar_shift_modal").toggle($(this).find(".deletebox_tukar_shift_modal:checked").length > 0);
      if($(this).find(".deletebox_tukar_shift_modal:checked").length < ($(this).find(".deletebox_tukar_shift_modal").length)){
          $('input[name="maincheckbox_tukar_shift_modal"]').prop('checked', false);
      }else if($(this).find(".deletebox_tukar_shift_modal:checked").length = ($(this).find(".deletebox_tukar_shift_modal").length)){
        $('input[name="maincheckbox_tukar_shift_modal"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_tukar_shift_modal"]').on("click", function() {
      $('.deletebox_tukar_shift_modal').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_reimbursement").on("click", function() {
      $("#delete_reimbursement").toggle($(this).find(".deletebox_reimbursement:checked").length > 0);
      if($(this).find(".deletebox_reimbursement:checked").length < ($(this).find(".deletebox_reimbursement").length)){
          $('input[name="maincheckbox_reimbursement"]').prop('checked', false);
      }else if($(this).find(".deletebox_reimbursement:checked").length = ($(this).find(".deletebox_reimbursement").length)){
        $('input[name="maincheckbox_reimbursement"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_reimbursement"]').on("click", function() {
      $('.deletebox_reimbursement').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_lembur").on("click", function() {
      $("#delete_lembur").toggle($(this).find(".deletebox_lembur:checked").length > 0);
      if($(this).find(".deletebox_lembur:checked").length < ($(this).find(".deletebox_lembur").length)){
          $('input[name="maincheckbox_lembur"]').prop('checked', false);
      }else if($(this).find(".deletebox_lembur:checked").length = ($(this).find(".deletebox_lembur").length)){
        $('input[name="maincheckbox_lembur"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_lembur"]').on("click", function() {
      $('.deletebox_lembur').prop('checked', this.checked);
  });
  
});

$(function() {
    $("#kt_table_izin_kerja").on("click", function() {
      $("#delete_izin_kerja").toggle($(this).find(".deletebox_izin_kerja:checked").length > 0);
      if($(this).find(".deletebox_izin_kerja:checked").length < ($(this).find(".deletebox_izin_kerja").length)){
          $('input[name="maincheckbox_izin_kerja"]').prop('checked', false);
      }else if($(this).find(".deletebox_izin_kerja:checked").length = ($(this).find(".deletebox_izin_kerja").length)){
        $('input[name="maincheckbox_izin_kerja"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox_izin_kerja"]').on("click", function() {
      $('.deletebox_izin_kerja').prop('checked', this.checked);
  });
  
});
