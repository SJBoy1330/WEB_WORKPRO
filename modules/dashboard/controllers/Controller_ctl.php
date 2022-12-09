<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		// is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Dashboard';

		// LOAD API 
		$result = curl_get('home/web', ['id_karyawan' => $this->id_karyawan, 'status_akses' => $this->web_akses, 'akses' => $this->managemen], ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan]);
		$mydata['result'] = $result->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/dashboard/home.css') . '">';
		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/dashboard/dashboard.js"></script>';
		$this->data['js_add'][] = '<script>
			var tepat = ' . $result->data->presensi->tepat . ';
			var terlambat = ' . $result->data->presensi->terlambat . ';
			var alpha = ' . $result->data->presensi->alpha . ';
			var izin = ' . $result->data->presensi->izin . ';
			$(function() {
				$("table[onload]").trigger("onload");
			});
		</script>';



		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_pengumuman()
	{
		// LOAD TITLE
		$mydata['title'] = 'Pengumuman';
		$result = curl_get(
			'pengumuman/all',
			[
				"id_sekolah" => $this->id_sekolah
			]
		);
		$mydata['data_pengumuman'] = $result->data;

		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Pengumuman';
		$this->data['button_back'] = base_url('home');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_pengumuman($id = NULL)
	{

		if ($id == NULL) {
			redirect('home');
		}
		// LOAD TITLE
		$result = curl_get(
			'pengumuman/all/',
			[
				"id_sekolah" => $this->id_sekolah,
				"id_pengumuman" => $id
			]
		);
		$mydata['result'] = $result->data;

		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Detail Pengumuman';
		if ($this->input->get('redirect') == true) {
			$this->data['button_back'] = base_url('home');
		} else {
			$this->data['button_back'] = base_url('home/list_pengumuman');
		}

		// LOAD CONFIG PAGE
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_berita()
	{
		// LOAD TITLE
		$mydata['title'] = 'List Berita';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/berita/listberita.js"></script>';

		// meta data
		$idkategori = $this->input->get('kategori', TRUE);

		$filter_berita['id_sekolah'] = $this->id_sekolah;

		$result = curl_get('berita', $filter_berita);
		$mydata['result'] = $result->data;

		$result = curl_get('berita/kategori', [
			"id_sekolah" => $this->id_sekolah,
		]);
		$mydata['kategori'] = $result->data;

		// LOAD CONFIG PAGE
		$this->data['button_back'] = base_url('home');
		$this->data['judul_halaman'] = 'Berita';
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_berita($id = NULL)
	{
		if ($id == NULL) {
			redirect('home');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail Berita';

		$result = curl_get('berita', [
			"id_sekolah" => $this->id_sekolah,
			'id_konten' => $id
		]);
		$mydata['result'] = $result->data;
		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Detail Berita';
		if ($this->input->get('redirect')) {
			$this->data['button_back'] = base_url('home');
		} else {
			$this->data['button_back'] = base_url('home/list_berita');
		}

		// LOAD CONFIG PAGE
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}


	public function set_cookie()
	{
		setcookie('LAT', '-7.4640797', time() + (86400 * 30), "/");
		setcookie('LONG', '112.7214074', time() + (86400 * 30), "/");
	}
}
