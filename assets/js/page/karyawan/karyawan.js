function filter(pengganti) {
    var change = document.querySelector('#' + pengganti);
    var role = $('#role').val();
    var divisi = $('#divisi').val();
    var status = $('#status').val();
    const prop_display = document.querySelectorAll("#parent_karyawan .target_search");

    prop_display.forEach((div) => {
        let val_status = div.getAttribute("data-status");
        let val_divisi = div.getAttribute("data-divisi");
        let val_role = div.getAttribute("data-role");
        if (((val_status == status) || (status == "all")) && ((val_divisi == divisi) || (divisi == "all")) && ((val_role == role) || (role == "all"))) {
            div.classList.remove("hiding"); //first remove the hide class from the image
            div.classList.add("showing"); //add show class in image
        } else {
            div.classList.add("hiding"); //add hide class in image
            div.classList.remove("showing"); //remove show class from the image
        }
    });

    var count = $('.target_search.showing').length;
    if (count <= 0) {
        change.classList.remove('hiding');
        change.classList.add('showing');
    } else {
        change.classList.add('hiding');
        change.classList.remove('showing');
    }
}

function get_modal(action, id) {
    if (action == 'tambah') {
        $.ajax({
            url: BASE_URL + 'karyawan/modal_tambah',
            method: 'POST',
            contentType: false,
            cache: false,
            processData: false,
            success: function (msg) {
                $('#display_modal').html(msg);
            }
        });
    } else if (action == 'edit') {
        $.ajax({
            url: BASE_URL + 'karyawan/modal_edit/' + id,
            method: 'POST',
            contentType: false,
            cache: false,
            processData: false,
            success: function (msg) {
                $('#display_modal').html(msg);
            }
        });
    } else {

    }
}


function jadwal(tipe) {
    var div = document.getElementById('req_id_pola_kerja');
    if (tipe == 1) {
        div.classList.remove('d-none');
    } else {
        div.classList.add('d-none');

    }
}

function sinkronisasi() {
    var ktp_provinsi = $('#ktp_provinsi').val();
    var ktp_kota = $('#id_ktp_kota').val();
    var ktp_kecamatan = $('#ktp_kecamatan').val();
    var ktp_desa = $('#ktp_desa').val();
    var ktp_kode_pos = $('#ktp_kode_pos').val();
    var ktp_alamat = $('#ktp_alamat').val();

    // $('#select2-domisili_provinsi-container').prop('title',)
    $('#domisili_provinsi').val(ktp_provinsi);
    $('#domisili_kota').val(ktp_kota);
    $('#domisili_kecamatan').val(ktp_kecamatan);
    $('#domisili_desa').val(ktp_desa);
    $('#domisili_kode_pos').val(ktp_kode_pos);
    $('#domisili_alamat').val(ktp_alamat);
}

function get_kota(element, display) {
    var id_provinsi = $(element).val();
    // console.log(id_provinsi);
    $.ajax({
        url: BASE_URL + 'karyawan/kota',
        method: 'POST',
        cache: false,
        data: { id_provinsi: id_provinsi },
        success: function (msg) {
            $(display).html(msg);
        }
    });
}

function get_kecamatan(element, display) {
    var id_kota = $(element).val();
    // console.log(id_kota);
    $.ajax({
        url: BASE_URL + 'karyawan/kecamatan',
        method: 'POST',
        cache: false,
        data: { id_kota: id_kota },
        success: function (msg) {
            $(display).html(msg);
        }
    });
}

function get_desa(element, display) {
    var id_kecamatan = $(element).val();
    // console.log(id_kecamatan);
    $.ajax({
        url: BASE_URL + 'karyawan/desa',
        method: 'POST',
        cache: false,
        data: { id_kecamatan: id_kecamatan },
        success: function (msg) {
            $(display).html(msg);
        }
    });
}