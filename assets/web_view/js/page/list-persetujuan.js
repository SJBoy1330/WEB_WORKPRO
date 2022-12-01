function detail_persetujuan(element,tipe) {
	var keterangan = $(element).data('keterangan');
	$('#keterangan').text(keterangan);
	if (tipe != 4) {
		var foto = $(element).data('foto');
		var nama = $(element).data('nama');
		// var bukti = $(element).data('bukti');
		document.getElementById("foto_user").style.backgroundImage = "url("+foto+")";

		if (tipe == 1) {
			var id = $(element).data('id');
			$('#id_per').val(id);
			var cc = $(element).data('cc');
			$('#cc').val(cc);
		}

		if (tipe == 2) {
			var id = $(element).data('id');
			$('#id_per').val(id);
		}
		if (tipe == 3) {
			var id = $(element).data('id');
			$('#id_per').val(id);
		}
		if (tipe == 5) {
			var id = $(element).data('id');
			$('#id_per').val(id);
		}


		// JUMLAH NOMINAL
		if (tipe == 3) {
			var jumlah = $(element).data('jumlah');
			$('#jumlah').text(jumlah);
		}
		// KATEGORI
		if (tipe == 3 || tipe == 5) {
			var kategori = $(element).data('kategori');
			$('#kategori').text(kategori);
		}
		// TANGGAL IZZIN
		if (tipe == 5) {
			var tanggal_mulai = $(element).data('tanggal_mulai');
			var tanggal_selesai = $(element).data('tanggal_selesai');
			$('#tanggal_mulai').text(tanggal_mulai);
			$('#tanggal_selesai').text(tanggal_selesai);
		}

		// TANGGAL
		if (tipe == 2 || tipe == 3) {
			var tanggal = $(element).data('tanggal');
			$('#tanggal').text(tanggal);
		}
		// FILE BUKTI
		// console.log(bukti);
		if (tipe == 2 || tipe == 3 || tipe == 5) {
			
			var cek = $(element).data('cek_bukti');
			var id = $(element).data('id');
			var div = document.getElementById("display_bukti");
			if (cek == 1) {
				div.classList.remove('d-none');
				var bukti = document.getElementById("bukti-"+id).innerHTML;
			}else{
				var bukti = '';
			}
			
			// console.log(bukti);
			
			if (bukti != '') {
				$('#dom_html').html(bukti);
			}else{
				div.classList.add('d-none');
			}

			

		}
		
		$('#nama_user').text(nama);
	

	}else{
		var asal_foto = $(element).data('asal_foto');
		var tanggal = $(element).data('tanggal');
		var pengganti_foto = $(element).data('pengganti_foto');
		var asal_karyawan = $(element).data('asal_karyawan');
		var pengganti_karyawan = $(element).data('pengganti_karyawan');
		document.getElementById("asal_foto").style.backgroundImage = "url("+asal_foto+")";
		document.getElementById("pengganti_foto").style.backgroundImage = "url("+pengganti_foto+")";

			var id = $(element).data('id');
			$('#id_per').val(id);
		$('#asal_nama').text(asal_karyawan);
		$('#pengganti_nama').text(pengganti_karyawan);
		$('#tanggal').text(tanggal);
	}

}


function approve(tipe, status) {
	$('#btn_close').prop('disabled',true);
	$('#btn_tolak').prop('disabled',true);
	$('#btn_setuju').prop('disabled',true);

	var alasan = $('#alasan_admin').val();
	var id = $('#id_per').val();
	var cc = $('#cc').val();
	var id_perusahaan = $('#id_perusahaan').val();
	var id_user = $('#id_user').val();
	var link = BASE_URL + "web_view/approval/";
	// console.log(link);
	$.ajax({
        url: link,
        data: { id_persetujuan: id,alasan : alasan,tipe : tipe,persetujuan : status,status : cc, id_perusahaan : id_perusahaan, id_user: id_user},
        method: 'POST',
        cache: false,
        dataType: 'json',
        success: function (data) {
        	// console.log(data);
        	$('#btn_close').prop('disabled',false);
        	$('#btn_tolak').prop('disabled',false);
			$('#btn_setuju').prop('disabled',false);
        	if (data == true) {
        		$('#display_content').load(BASE_URL + 'web_view/list_persetujuan/'+id_perusahaan+'/'+id_user+'/'+tipe+ '/ #reload_content');
        		 $('#modalDetail').modal('hide');
        		 $('#alasan_admin').val('');
        	}
        }
    })
}


function display_gambar(element) {
	var link = $(element).data('image');
	if (link != '') {
		$('#display_gambar_besar').prop('src',link);
	}else{
		$('#display_gambar_besar').prop('src',BASE_URL + 'assets/web_view/images/default_avatar.png');
	}
}



function submit_sandi(element) {
	var link = BASE_URL + "web_view/password/";
	$(element).prop('disabled',true);
	var value = $('#password').val();
	var id_perusahaan = $('#id_perusahaan').val();
	var id_karyawan = $('#id_karyawan').val();
	$.ajax({
        url: link,
        data: { password: value, id_perusahaan : id_perusahaan, id_karyawan : id_karyawan},
        method: 'POST',
        cache: false,
        dataType: 'json',
        success: function (data) {
        	console.log(data);
        	$(element).prop('disabled',false);
        	if (data == true) {
        		$('#display_content').load(BASE_URL + 'web_view/persetujuan/'+id_perusahaan+'/'+id_karyawan+' #reload_content');
        	}
        }
    })
}


function manipulasi_button(element) {
	var value = element.value;
	if (value != '') {
		$('#submit_sandi').prop('disabled',false);
	}else{
		$('#submit_sandi').prop('disabled',true);
	}
}

function date_load(element) {
	var tanggal = element.value;
	// console.log(value);

	var id_perusahaan = $('#id_perusahaan').val();
	var id_karyawan = $('#id_karyawan').val();
	var server = $('#server').val();

	$('#select_date').val(tanggal);

	$('#display_content').load(BASE_URL + 'web_view/jadwal/'+id_perusahaan+'/'+id_karyawan+'?server='+server+'&tanggal='+tanggal+' #reload_content');
}