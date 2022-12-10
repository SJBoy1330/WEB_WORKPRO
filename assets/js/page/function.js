
function submit_form(element, id_form, num = 0, loader = 'small', color = '#FFFFFF') {
    // console.log('ok');
    var text_button = document.getElementById(element.id).innerHTML;
    var url = $(id_form).attr('action');
    var method = $(id_form).attr('method');
    // console.log(url);

    var form = $('form')[num];
    var form_data = new FormData(form);

    // console.log(form);
    $.ajax({
        url: url,
        method: method,
        data: form_data,
        dataType: 'json',
        beforeSend: function () {
            $('#' + element.id).prop('disabled', true);
            if (loader == 'small') {
                $('#' + element.id).html('<div class="spinner-border" style="color : ' + color + '" role="status">\
                <span class="sr-only"></span>\
</div>');
            }

            if (loader == 'big') {
                $('#loading_scene').modal('show');
            }

        },
        success: function (data) {
            // console.log(data);

            $('.fadedin').remove();
            if (data.etc != null) {
                for (var a = 0; a < data.etc.length; a++) {
                    data.etc[a]
                }
            }
            if (data.load != null) {
                for (var a = 0; a < data.load.length; a++) {
                    $(data.load[a].parent).load(data.load[a].reload);
                }
            }
            $('#' + element.id).prop('disabled', false);
            if (loader == 'small') {
                $('#' + element.id).html(text_button);
            }
            if (loader == 'big') {
                $('#loading_scene').modal('hide');
                $('#refresh_loading').load(BASE_URL + 'notifikasi/ #loading_scene');
                $('.modal-backdrop').remove();
            }

            if (data.status == 200 || data.status == true) {
                $(id_form).find("input[type=text], textarea").val("");
                var icon = 'success';
            } else {
                var icon = 'warning';
            }
            if (data.alert) {
                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: css_button
                    }
                }).then(function () {
                    if (data.redirect) {
                        location.href = data.redirect;
                    }
                    if (data.reload == true) {
                        location.reload();
                    }
                    if (data.modal != null) {
                        $(data.modal.id).modal(data.modal.action);
                    }
                });
            } else {
                if (data.required) {
                    const array = data.required.length;
                    for (var i = 0; i < array; i++) {
                        $('#' + data.required[i][0]).append('<span class="text-danger size-12 fadedin">' + data.required[i][1] + '</span>');
                    }
                }
                if (data.redirect) {
                    location.href = data.redirect;
                }
                if (data.modal != null) {
                    $(data.modal.id).modal(data.modal.action);
                }

                if (data.reload == true) {
                    location.reload();
                }
            }
        }
    });

}
function search(element, property = 'tbody tr', backup = null) {

    let cards = document.querySelectorAll(property)

    let search_query = element.value;
    console.log(search_query);

    //Use innerText if all contents are visible
    //Use textContent for including hidden elements
    for (var i = 0; i < cards.length; i++) {
        if (cards[i].textContent.toLowerCase()
            .includes(search_query.toLowerCase())) {
            // cards[i].style.display = "";
            cards[i].classList.remove("hiding");
            cards[i].classList.add("showing");
        } else {
            cards[i].classList.add("hiding");
            cards[i].classList.remove("showing");
        }
    }

    if (backup != null) {
        var vector = document.querySelector(backup);
        let jumlah = document.querySelectorAll(property + '.showing').length;
        console.log(jumlah);
        if (jumlah < 1) {
            vector.classList.remove('hiding');
            vector.classList.add('showing');
        } else {
            vector.classList.remove('showing');
            vector.classList.add('hiding');
        }
    }

    //A little delay
    let typingTimer;
    // let typeInterval = 500;
    let searchInput = document.getElementById(element.id);

    clearTimeout(typingTimer);
    // typingTimer = setTimeout(liveSearch, 0);
}


function preview_image(img) {
    // console.log(img);
    $('#preview_preview_image').attr('src', img);
    $('#modal_preview_all').modal('show');
}


function approval(tipe, status, id_persetujuan, text = 'unknown', sts_presensi = null, parent, reload) {

    var alasan = '';
    Swal.fire({
        title: 'KONFIRMASI',
        html: text,
        icon: 'question',
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off',
            id: 'alasan_persetujuan'
        },
        showCancelButton: true,
        confirmButtonColor: '#FFC83E',
        cancelButtonColor: '#FDE8B4',
        confirmButtonText: "Lanjutkan",
        cancelButtonText: "Batal",
        reverseButtons: true
    }).then((result) => {
        var alasan = $('#alasan_persetujuan').val();
        $.ajax({
            url: BASE_URL + 'persetujuan/approval',
            data: { id_persetujuan: id_persetujuan, alasan: alasan, tipe: tipe, persetujuan: status, status: sts_presensi },
            method: 'POST',
            cache: false,
            dataType: 'json',
            beforeSend: function () {
                $('#loading_scene').modal('show');
            },
            success: function (data) {
                $('#loading_scene').modal('hide');
                console.log(data);
                Swal.fire({
                    title: data.title,
                    html: data.message,
                    icon: data.icon,
                    buttonsStyling: !1,
                    confirmButtonText: 'Ok',
                    customClass: {
                        confirmButton: css_button
                    }
                });
                if (data.status == 200 || data.status == true) {

                    if (tipe == 1) {
                        $('#row_' + tipe + '_' + sts_presensi + '_' + id_persetujuan).remove();
                    } else {
                        $('#row_' + tipe + '_' + id_persetujuan).remove();
                    }

                    var cek = $("#parent_" + tipe).find(".number_" + tipe);
                    for (let i = 0; i < cek.length; i++) {
                        var v = cek[i].id;
                        $('#' + v).text(i + 1);
                    }

                    console.log(cek.length);

                    if (parent && reload && cek.length <= 0) {
                        console.log('reload');
                        $('#' + parent).load(BASE_URL + 'dashboard/ #' + reload);
                    }

                }
                // $('#display_tabel_' + tipe).load(BASE_URL + 'dashboard/ tbody#reload_tabel_' + tipe);
            }
        });
    })
}


function approval_all(class_checkbox = '.child_checkbox', tipe, status, text = 'unknown', sts_presensi = null, parent = null, reload = null, pagination = null) {
    var id_persetujuan = [];
    var loop = document.querySelectorAll('input' + class_checkbox + ':checked');

    for (var i = 0; i < loop.length; i++) {
        id_persetujuan.push(loop[i].value);
    }

    if (id_persetujuan.length <= 0) {
        Swal.fire({
            title: 'PERINGATAN',
            html: 'Data persetujuan tidak terdeteksi',
            icon: 'warning',
            buttonsStyling: !1,
            confirmButtonText: 'Ok',
            customClass: { confirmButton: css_button }
        });
    }
    var alasan = '';
    Swal.fire({
        title: 'KONFIRMASI',
        html: text,
        icon: 'question',
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off',
            id: 'alasan_persetujuan_all'
        },
        showCancelButton: true,
        confirmButtonColor: '#FFC83E',
        cancelButtonColor: '#FDE8B4',
        confirmButtonText: "Lanjutkan",
        cancelButtonText: "Batal",
        reverseButtons: true
    }).then((result) => {
        var alasan = $('#alasan_persetujuan_all').val();
        $.ajax({
            url: BASE_URL + 'persetujuan/approval/true',
            data: { id_persetujuan: id_persetujuan, alasan: alasan, tipe: tipe, persetujuan: status, status: sts_presensi },
            method: 'POST',
            cache: false,
            dataType: 'json',
            beforeSend: function () {
                $('#loading_scene').modal('show');
            },
            success: function (data) {
                $('#loading_scene').modal('hide');
                console.log(data);
                Swal.fire({
                    title: data.title,
                    html: data.message,
                    icon: data.icon,
                    buttonsStyling: !1,
                    confirmButtonText: 'Ok',
                    customClass: {
                        confirmButton: css_button
                    }
                });
                if (data.status == 200 || data.status == true) {
                    // var jmlh = document.querySelectorAll('input' + class_checkbox);
                    var cek = $("#parent_" + tipe).find(".number_" + tipe);
                    // console.log(cek.length);

                    for (var i = 0; i < id_persetujuan.length; i++) {
                        if (tipe == 1) {
                            $('#row_' + tipe + '_' + id_persetujuan[i].split("|")[0] + '_' + id_persetujuan[i].split("|")[1]).remove();
                        } else {
                            $('#row_' + tipe + '_' + id_persetujuan).remove();
                        }
                    }
                    for (let i = 0; i < cek.length; i++) {
                        var v = cek[i].id;
                        $('#' + v).text(i + 1);
                    }
                    // console.log(cek.length);
                    if (parent && reload && cek.length <= 0) {
                        console.log('reload');
                        $('#' + parent).load(BASE_URL + 'dashboard/ #' + reload);
                    }


                }
                // $('#display_tabel_' + tipe).load(BASE_URL + 'dashboard/ tbody#reload_tabel_' + tipe);
            }
        });
    })
}


function checked_action(element, display, pengganti = null, child = 'child_checkbox') {
    var display = document.getElementById(display);
    if (pengganti != null) {
        var pengganti = document.getElementById(pengganti);
    }
    if (element.checked) {
        display.classList.remove('d-none');
        if (pengganti != null) {
            pengganti.classList.add('d-none');
        }
        $('.' + child).prop('checked', true);
    } else {
        display.classList.add('d-none');
        if (pengganti != null) {
            pengganti.classList.remove('d-none');
        }
        $('.' + child).prop('checked', false);
    }


}


function child_action(element, id_main_checkbox, display, pengganti = null, child = 'child_checkbox') {
    var display = document.getElementById(display);
    if (pengganti != null) {
        var pengganti = document.getElementById(pengganti);
    }
    var total = $('.' + child).length;
    var total_checked = $('input.' + child + ':checked').length;
    // console.log(total, total_checked);
    // console.log(cek);
    if (element.checked) {
        if (total_checked > 0) {
            display.classList.remove('d-none');
            if (pengganti != null) {
                pengganti.classList.add('d-none');
            }
            if (total_checked == total) {
                $('#' + id_main_checkbox).prop('checked', true);
            } else {
                $('#' + id_main_checkbox).prop('checked', false);
            }
        } else {
            display.classList.add('d-none');
            if (pengganti != null) {
                pengganti.classList.remove('d-none');
            }
        }

    } else {
        if (total_checked > 0) {
            display.classList.remove('d-none');
            if (total_checked == total) {
                $('#' + id_main_checkbox).prop('checked', true);
            } else {
                $('#' + id_main_checkbox).prop('checked', false);
            }
        } else {
            display.classList.add('d-none');
        }
    }


}

function openCity(evt, cityName, id = null, text = 'unknown', pagination = null) {
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
    if (id != null) {
        $(id).text(text);
    }
    if (pagination != null) {
        var pg_active = document.querySelector('.pgn.muncul');
        pg_active.classList.add('d-none');
        pg_active.classList.remove('muncul');
        var pg = document.getElementById(pagination);
        pg.classList.remove('d-none');
        pg.classList.add('muncul');

    }
}
document.getElementById("defaultOpen").click();
