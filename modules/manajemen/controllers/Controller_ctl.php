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
		redirect('manajemen/prospek');
	}

	public function prospek()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/prospek.js"></script>';

		// LOAD API
		// $tanggal = $this->input->get('tanggal');
		// $id_karyawan = $this->input->get('id_karyawan');
		// if ($tanggal) {
		// 	$w['tanggal'] = $tanggal;
		// }
		// if ($id_karyawan) {
		// 	$w['id_karyawan'] = $id_karyawan;
		// }
		$w['status_get'] = $this->web_akses;
		if ($this->web_akses == 'unall') {
			$w['id_karyawan'] = $this->id_karyawan;
		}
		$result = curl_get('prospek/', $w, ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan]);
		$attribut = curl_get('attribut/prospek/', [], ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan]);

		// LOAD MYDATA
		$mydata['result'] = $result->data;
		$mydata['attr'] = $attribut->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function kunjungan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kunjungan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/kunjungan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kunjungan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function reimbursement()
	{
		// LOAD TITLE
		$mydata['title'] = 'Reimbursement';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/reimbursement.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('reimbursement', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function reimbursement_kategori()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kategori Reimbursement';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/reimbursement_kategori.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('reimbursement_kategori', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function role()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/role.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('role', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function status_prospek()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/status_prospek.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('status_prospek', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function sumber_prospek()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/sumber_prospek.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('sumber_prospek', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
