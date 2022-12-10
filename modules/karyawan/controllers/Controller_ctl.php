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
}
