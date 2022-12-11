<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		redirect('karyawan/daftar');
	}

	public function daftar()
	{
		// LOAD TITLE
		$mydata['title'] = 'Daftar Karyawan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/karyawan/karyawan.js"></script>';
		$this->data['js_add'][] = '<script>
			$(function() {
				$("table[onload]").trigger("onload");
			});
		</script>';
		// LOAD API
		$result = curl_get('karyawan/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan]);
		$atribut = curl_get('attribut/karyawan/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server]);

		// DEKLARASI MYDATA
		$mydata['result'] = $result->data;
		$mydata['atribut'] = $atribut->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function grup_karyawan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Grup Karyawan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('grup_karyawan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function divisi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Divisi Karyawan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/karyawan/divisi.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('divisi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function modal_tambah()
	{
		$mydata['result'] = curl_get('attribut/profil/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server])->data;
		$mydata['karyawan'] = curl_get('attribut/karyawan/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server])->data;
		$mydata['provinsi'] = curl_get('attribut/provinsi/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server])->data;
		$this->load->view('modal/modal_tambah', $mydata);
	}

	public function modal_edit($id_karyawan = null)
	{
		$mydata['result'] = curl_get('karyawan/', ['id_karyawan' => $id_karyawan], ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan])->data;
		$mydata['karyawan'] = curl_get('attribut/karyawan/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server])->data;
		$mydata['provinsi'] = curl_get('attribut/provinsi/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server])->data;
		$mydata['profil'] = curl_get('attribut/profil/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server])->data;
		$this->load->view('modal/modal_edit', $mydata);
	}

	public function kota()
	{
		$id_provinsi = $this->input->post('id_provinsi');
		$result = curl_get('attribut/kota', ['id_provinsi' => $id_provinsi], ['api_key: ' . $this->api_key, 'server: ' . $this->server]);
		$html = '';
		if ($result->data) {
			foreach ($result->data as $key) {
				$html .= ' <option value="' . $key->id_kota . '">' . $key->nama . '</option>';
			}
		}

		echo $html;
	}
	public function kecamatan()
	{
		$id_kota = $this->input->post('id_kota');
		$result = curl_get('attribut/kecamatan', ['id_kota' => $id_kota], ['api_key: ' . $this->api_key, 'server: ' . $this->server]);
		$html = '';
		if ($result->data) {
			foreach ($result->data as $key) {
				$html .= ' <option value="' . $key->id_kecamatan . '">' . $key->nama . '</option>';
			}
		}

		echo $html;
	}
	public function desa()
	{
		$id_kecamatan = $this->input->post('id_kecamatan');
		$result = curl_get('attribut/desa', ['id_kecamatan' => $id_kecamatan], ['api_key: ' . $this->api_key, 'server: ' . $this->server]);
		$html = '';
		if ($result->data) {
			foreach ($result->data as $key) {
				$html .= ' <option value="' . $key->id_desa . '">' . $key->nama . '</option>';
			}
		}

		echo $html;
	}
}
