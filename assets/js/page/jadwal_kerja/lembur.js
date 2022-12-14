$("#kt_datepicker_1").flatpickr();

$("#kt_datepicker_2").flatpickr();

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

// set the dropzone container id
const id = "#kt_dropzonejs_example_3";
const dropzone = document.querySelector(id);

// set the preview element template
var previewNode = dropzone.querySelector(".dropzone-item");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    parallelUploads: 20,
    maxFilesize: 1, // Max filesize in MB
    previewTemplate: previewTemplate,
    previewsContainer: id + " .dropzone-items", // Define the container to display the previews
    clickable: id + " .dropzone-select" // Define the element that should be used as click trigger to select files.
});

myDropzone.on("addedfile", function (file) {
    // Hookup the start button
    const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
    dropzoneItems.forEach(dropzoneItem => {
        dropzoneItem.style.display = '';
    });
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function (progress) {
    const progressBars = dropzone.querySelectorAll('.progress-bar');
    progressBars.forEach(progressBar => {
        progressBar.style.width = progress + "%";
    });
});

myDropzone.on("sending", function (file) {
    // Show the total progress bar when upload starts
    const progressBars = dropzone.querySelectorAll('.progress-bar');
    progressBars.forEach(progressBar => {
        progressBar.style.opacity = "1";
    });
});

// Hide the total progress bar when nothing"s uploading anymore
myDropzone.on("complete", function (progress) {
    const progressBars = dropzone.querySelectorAll('.dz-complete');

    setTimeout(function () {
        progressBars.forEach(progressBar => {
            progressBar.querySelector('.progress-bar').style.opacity = "0";
            progressBar.querySelector('.progress').style.opacity = "0";
        });
    }, 300);
});

$(function() {
    $("#kt_table_lembur").on("click", function() {
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
