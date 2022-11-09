$(function() {
    var tab_penjelasan = document.getElementById('tab_penjelasan');
    var tab_persetujuan = document.getElementById('tab_persetujuan');
    $("#kt_table_data_presensi").on("click", function() {
      $("#tab_persetujuan").toggle($(this).find(".deletebox:checked").length > 0);
      if($(this).find(".deletebox:checked").length < ($(this).find(".deletebox").length)){
          $('input[name="maincheckbox"]').prop('checked', false);
      }else if($(this).find(".deletebox:checked").length = ($(this).find(".deletebox").length)){
        $('input[name="maincheckbox"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox"]').on("click", function() {
    // console.log('ok');
    if (this.checked) {
        tab_persetujuan.classList.remove('d-none');
        tab_penjelasan.classList.add('d-none');
    }else{
        tab_persetujuan.classList.add('d-none');
        tab_penjelasan.classList.remove('d-none');
    }
      $('.deletebox').prop('checked', this.checked);
  });
  
});